<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Productcategory;
use Illuminate\Support\Facades\File;
use DataTables,Auth;

class ProductcategoryController extends Controller
{
    public function list()
    {
        try
        {
            $list = Productcategory::where(['is_active'=>1,'is_delete'=>0])->get();
            $page_title = 'Category List';
            $maincat = '';

            return view('admin.productcategory.list', compact('list','page_title','maincat'));
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function add()
    {
        try
        {
            $productCategoryList = Productcategory::where(['is_active'=>1,'is_delete'=>0])->get();
            $page_title = 'Add Category';
            return view('admin.productcategory.create',compact('page_title','productCategoryList'));
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'     => 'required'
        ]);
        if($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        
        $productCategoryList = Productcategory::where([['is_active','=',1],['is_delete','=',0],['cat_id','=',$request->cat_id],['title','=',$request->title]])->first();
        if($productCategoryList) {
            return redirect()->back()->withInput()->with('error', 'Record already exist!!');
        }
        

        try
        {   
            $randomName = '';
            if($request->hasFile('product_banner_image') && $request->product_banner_image != '')
            {
                $file = $request->file('product_banner_image');
                $path = '/upload/categoryimg';
                $randomName = $this->imageStore($file, $path);
            }

            $date = date("d-M-Y H:i:s");
            // store color information

            $slug = $this->srt_slug($request->title, 'product_category');
            $product = Productcategory::create([
                        'title' => $request->title,
                        'slug' => $slug,
                        'cat_id' => $request->cat_id,
                        'product_banner_image' => $randomName,
                        'created_at' => $date
                    ]);


        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }


        if($product)
        {
            session()->flash('success','Record Created!');
            return redirect()->route('product.category.list');
        }else{
            session()->flash('error','Failed to Create New Record! Try again.');
            return redirect()->route('product.category.list');
        }
    }

    public function edit($id)
    {
        $id = $this->enc($id, true);
        try
        {
            $productcategory = Productcategory::where('id', $id)->first();
            $productCategoryList = Productcategory::where([['is_active','=',1],['is_delete','=',0],['id','<>',$id]])->get();
            $page_title = 'Edit Category';

            if($productcategory){
                return view('admin.productcategory.edit', compact('productcategory','page_title','productCategoryList'));
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
        $productCategoryFind = Productcategory::find($id);

        if (!$productCategoryFind) {
            session()->flash('error','Record Not Found.');
            return redirect()->route('product.category.list');
        }

        $checkName = Productcategory::where([['id','<>',$id],['title','=',$request->title]])->first();
        if ($checkName) {
            session()->flash('error','The name is already taken.');
            return redirect()->route('product.category.list');
        }

        // update product info
        $validator = Validator::make($request->all(), [
            'id'       => 'required',
            'title'     => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        if($request->hasFile('product_banner_image') && $request->product_banner_image != '')
        {
            if ($productCategoryFind->product_banner_image) {
                $file_path = public_path().'/upload/categoryimg/'.$productCategoryFind->product_banner_image;
                $unlink = $this->imageUnlink($file_path);
            }

            $file = $request->file('product_banner_image');
            $path = '/upload/categoryimg';
            $randomName = $this->imageStore($file, $path);

            $update1 = $productCategoryFind->update(['product_banner_image' => $randomName]);
        }

        $date = date("d-M-Y H:i:s");
        if ($request->title != $productCategoryFind->title) {
            $slug = $this->srt_slug($request->title, 'product_category');
        }else{
            $slug = $productCategoryFind->slug;
        }
        $update = $productCategoryFind->update([
            'title' => $request->title,
            'slug' => $slug,
            'cat_id' => $request->cat_id,
            'updated_at' => $date,
        ]);

        session()->flash('success','Record Updated Succesfully!');
        return redirect()->route('product.category.list');
    }


    public function delete($id)
    {
        $id = $this->enc($id, true);
        $productCategory = Productcategory::find($id);
        $findSubCategory = Productcategory::where(['cat_id'=>$id])->first();
        if ($findSubCategory) {
            /*foreach ($findSubCategory as $key => $value) {
                $value->delete();
            }*/

            session()->flash('error','Record found under thi category!!.');
            return redirect()->route('product.category.list');
        }

        if (!$productCategory) {
            session()->flash('error','Data not found.');
            return redirect()->route('product.category.list');            
        }

        $productCategory->delete();
            session()->flash('success','Data removed!');
        return redirect()->route('product.category.list');
    }
}
