<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Attachments;
use App\Models\Productimages;
use App\Models\Features;
use App\Models\Amenities;
use Illuminate\Support\Facades\File;
use DataTables,Auth;
use DB;

class ProductController extends Controller
{
    public function list()
    {
        try
        {
            $list = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle')
                        ->where(['product.is_active'=>1,'product.is_delete'=>0,'product_category.is_active'=>1,'product_category.is_delete'=>0])
                        ->get();
            $page_title = 'Property List';

            return view('admin.product.list', compact('list','page_title'));
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function add()
    {
        try
        {
            $page_title = 'Add Property';
            $productCategory = Productcategory::whereDoesntHave('childCategories')->get();
            $features = Features::where('status', 1)->get();
            $amenities = Amenities::where('status', 1)->get();
            return view('admin.product.create',compact('page_title','productCategory', 'amenities', 'features'));
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'      => 'required',
            'cat_id'     => 'required',
            'listed_for' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        $floor_plan = '';
        if($request->hasFile('floor_plan') && $request->floor_plan != '') {
            $file = $request->file('floor_plan');
            $path = '/upload/floor_plan';
            $floor_plan = $this->imageStore($file, $path);
        }

        $amenities_arr = array();
        foreach ($request->amenities as $key1 => $value1) {
            if ($value1 == 'on') {
                $amenities_arr[] = $key1;
            }
        }
        $amenities_arr = json_encode($amenities_arr);

        $features_arr = array();
        foreach ($request->features as $key2 => $value2) {
            if ($value2 == 'on') {
                $features_arr[] = $key2;
            }
        }
        $features_arr = json_encode($features_arr);

        $datetime = date("d-M-Y H:i:s");
        $slug = $this->srt_slug($request->title, 'product');

        // store product information
        $product = Product::create([
                    'title' => $request->title,
                    'slug' => $slug,
                    'cat_id' => $request->cat_id,
                    'description' => $request->description,
                    'map_link' => $request->map_link,
                    'floor_plan' => $floor_plan,
                    'address' => $request->address,
                    'video_link' => $request->video_link,
                    'price' => $request->price,
                    'listed_for' => $request->listed_for,
                    'amenities' => $amenities_arr,
                    'features' => $features_arr,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'additional_details' => $request->additional_details,
                    'created_at' => $datetime
                ]);

        $insertedProductId = $product->id;

        if ($insertedProductId) {
            if($request->hasFile('product_image') && $request->product_image != '') {
                $all_product_images = $request->file('product_image');
                $path_product_images = '/upload/product_image';

                foreach ($all_product_images as $one_pro_img) {
                    $one_pro_img_name = $this->imageStore($one_pro_img, $path_product_images);

                    $productimages = Productimages::create([
                                        'product_id' => $insertedProductId,
                                        'product_image' => $one_pro_img_name,
                                        'created_at' => $datetime
                                    ]);
                }
            }

            if($request->hasFile('attachments') && $request->attachments != '') {
                $all_attachments = $request->file('attachments');
                $path_attachments = '/upload/attachments';

                foreach ($all_attachments as $one_attachments) {
                    $one_attachments_name = $this->imageStore($one_attachments, $path_attachments);

                    $attachments = Attachments::create([
                                        'product_id' => $insertedProductId,
                                        'file_name' => $one_attachments_name,
                                        'created_at' => $datetime
                                    ]);
                }
            }
        }
           
        if($insertedProductId) {
            session()->flash('success','New Data Created!');
            return redirect()->route('product.list');
        }else{
            session()->flash('error','Failed to Create New Data! Try again.');
            return redirect()->route('product.list');
        }
    }

    public function edit($id)
    {
        $id = $this->enc($id, true);
        try
        {
            $product  = Product::find($id);
            if (!$product) {
                session()->flash('error','Property Not Found.');
                return redirect()->route('product.list');
            }

            $product->features = json_decode($product->features, true);
            $product->amenities = json_decode($product->amenities, true);

            $productCategory = Productcategory::whereDoesntHave('childCategories')->get();
            $productimages = Productimages::where('product_id', $product->id)->get();
            $features = Features::where('status', 1)->get();
            $amenities = Amenities::where('status', 1)->get();

            $page_title = 'Edit Property';
            if($product){
                return view('admin.product.edit', compact('product','page_title','productCategory', 'amenities', 'features', 'productimages'));
            }else{
                return redirect('404');
            }

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function update(Request $request)
    {
        $id = $this->enc($request->id,true);
        $productFind = Product::find($id);

        if (!$productFind) {
            session()->flash('error','Property Not Found.');
            return redirect()->route('product.list');
        }

        $checkName = Product::where([['id','<>',$id],['title','=',$request->title]])->first();
        if ($checkName) {
            session()->flash('error','The name is already taken.');
            return redirect()->route('product.list');
        }

        $validator = Validator::make($request->all(), [
            'title'      => 'required',
            'cat_id'     => 'required',
            'listed_for' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        if($request->hasFile('floor_plan') && $request->floor_plan != '') {
            if ($productFind->floor_plan) {
                $file_path = public_path().'/upload/floor_plan/'.$productFind->floor_plan;
                $unlink = $this->imageUnlink($file_path);
            }

            $file = $request->file('floor_plan');
            $path = '/upload/floor_plan';
            $randomName = $this->imageStore($file, $path);

            $floor_plan = $productFind->update(['floor_plan' => $randomName]);
        }

        $amenities_arr = array();
        foreach ($request->amenities as $key1 => $value1) {
            if ($value1 == 'on') {
                $amenities_arr[] = $key1;
            }
        }
        $amenities_arr = json_encode($amenities_arr);

        $features_arr = array();
        foreach ($request->features as $key2 => $value2) {
            if ($value2 == 'on') {
                $features_arr[] = $key2;
            }
        }
        $features_arr = json_encode($features_arr);

        $datetime = date("d-M-Y H:i:s");
        if ($productFind->title == $request->title) {
            $slug = $productFind->slug;
        }else{
            $slug = $this->srt_slug($request->title, 'product');
        }
            
        $update = $productFind->update([
            'title' => $request->title,
            'slug' => $slug,
            'cat_id' => $request->cat_id,
            'description' => $request->description,
            'map_link' => $request->map_link,
            'address' => $request->address,
            'video_link' => $request->video_link,
            'price' => $request->price,
            'listed_for' => $request->listed_for,
            'amenities' => $amenities_arr,
            'features' => $features_arr,
            'phone' => $request->phone,
            'email' => $request->email,
            'additional_details' => $request->additional_details,
            'updated_at' => $datetime
        ]);


        if ($update) {
            if($request->hasFile('product_image') && $request->product_image != '') {
                $old_product_image = Productimages::where(['status'=>1, 'product_id'=>$productFind->id])->get();
                if ($old_product_image->first()) {
                    foreach ($old_product_image as $key => $value) {
                        $file_path = public_path().'/upload/product_image/'.$value->product_image;
                        $unlink = $this->imageUnlink($file_path);
                    }
                }

                $all_product_images = $request->file('product_image');
                $path_product_images = '/upload/product_image';

                foreach ($all_product_images as $one_pro_img) {
                    $one_pro_img_name = $this->imageStore($one_pro_img, $path_product_images);
                    $productimages = Productimages::create([
                                        'product_id' => $productFind->id,
                                        'product_image' => $one_pro_img_name,
                                        'created_at' => $datetime
                                    ]);
                }
            }

            if($request->hasFile('attachments') && $request->attachments != '') {
                $old_attachments = Attachments::where(['status'=>1, 'product_id'=>$productFind->id])->get();
                if ($old_attachments->first()) {
                    foreach ($old_attachments as $key => $value) {
                        $file_path = public_path().'/upload/product_image/'.$value->file_name;
                        $unlink = $this->imageUnlink($file_path);
                    }
                }

                $all_attachments = $request->file('attachments');
                $path_attachments = '/upload/attachments';

                foreach ($all_attachments as $one_attachments) {
                    $one_attachments_name = $this->imageStore($one_attachments, $path_attachments);

                    $attachments = Attachments::create([
                                        'product_id' => $productFind->id,
                                        'file_name' => $one_attachments_name,
                                        'created_at' => $datetime
                                    ]);
                }
            }
        }

        session()->flash('success','Data Updated Succesfully!');
        return redirect()->route('product.list');
    }


    public function delete($id)
    {
        $id = $this->enc($id, true);
        $product = Product::find($id);

        if (!$product) {
            session()->flash('error','Data not found.');
            return redirect()->route('product.list');            
        }

        $productimages = Productimages::where('product_id', $product->id)->get();
        if ($productimages) {
            foreach ($productimages as $value3) {
                if ($value3->product_image) {
                    $file_path = public_path().'/upload/product_image/'.$value3->product_image;
                    $unlink = $this->imageUnlink($file_path);
                }
            }
        }

        $attachments = Attachments::where('product_id', $product->id)->get();
        if ($attachments) {
            foreach ($attachments as $value4) {
                if ($value4->file_name) {
                    $file_path = public_path().'/upload/attachments/'.$value4->file_name;
                    $unlink = $this->imageUnlink($file_path);
                }
            }
        }

        if ($product->floor_plan) {
            $floor_plan = public_path().'/upload/productimg/'.$product->floor_plan;
            $unlink = $this->imageUnlink($floor_plan);
        }

        $product->delete();
            session()->flash('success','Data removed!');
        return redirect()->route('product.list');
    }
}
