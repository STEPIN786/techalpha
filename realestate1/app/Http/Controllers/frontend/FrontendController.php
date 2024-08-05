<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Attachments;
use App\Models\Productimages;
use App\Models\Features;
use App\Models\Amenities;
use App\Models\ContactInquiry;
use DataTables,Auth;
use DB;

class FrontendController extends Controller
{
	public function home()
	{
		$sell_properties = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle','product_category.slug AS cat_slug')
                        ->where(['product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.listed_for'=>'sell',
                        		'product_category.is_active'=>1,
                        		'product_category.is_delete'=>0])
                        ->get();
        foreach ($sell_properties as $key => $value) {
        	$property_images = Productimages::where('product_id', $value->id)->orderBy('id', 'DESC')->first();
        	$property_images_arr = '';
        	if ($property_images) {
        		$property_images = asset('upload/product_image/'.$property_images->product_image);
        		$property_images_arr = $property_images;
        	}

	        $value->property_images = $property_images_arr;
	        $detail_link = route('front-buy-detail', ['slug' => $value->cat_slug, 'slug2' => $value->slug]);
	        $value->detail_link = $detail_link;
        }
        // $this->pf($sell_properties);


        $com_rentsell_properties = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle','product_category.slug AS cat_slug')
                        ->where(['product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.listed_for'=>'buy',
                        		'product.listed_for'=>'rent',
                        		'product.cat_id'=>3,
                        		'product_category.is_active'=>1,
                        		'product_category.is_delete'=>0])
                        ->get();
        foreach ($com_rentsell_properties as $key => $value) {
        	$property_images = Productimages::where('product_id', $value->id)->orderBy('id', 'DESC')->first();
        	$property_images_arr = '';
        	if ($property_images) {
        		$property_images = asset('upload/product_image/'.$property_images->product_image);
        		$property_images_arr = $property_images;
        	}

	        $value->property_images = $property_images_arr;
	        $detail_link = route('front-buy-detail', ['slug' => $value->cat_slug, 'slug2' => $value->slug]);
	        $value->detail_link = $detail_link;
        }


        $rent_properties = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle','product_category.slug AS cat_slug')
                        ->where(['product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.listed_for'=>'rent',
                        		'product_category.is_active'=>1,
                        		'product_category.is_delete'=>0])
                        ->get();
        foreach ($rent_properties as $key => $value) {
        	$property_images = Productimages::where('product_id', $value->id)->orderBy('id', 'DESC')->first();
        	$property_images_arr = '';
        	if ($property_images) {
        		$property_images = asset('upload/product_image/'.$property_images->product_image);
        		$property_images_arr = $property_images;
        	}

	        $value->property_images = $property_images_arr;
	        $detail_link = route('front-buy-detail', ['slug' => $value->cat_slug, 'slug2' => $value->slug]);
	        $value->detail_link = $detail_link;
        }


		return view('frontend.home', compact('sell_properties', 'rent_properties', 'com_rentsell_properties'));
	}

	public function properties_list($slug)
	{
		$cat = Productcategory::where('slug', $slug)->first();
		if (!$cat) {
			return redirect()->back();
		}

		$list = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle')
                        ->where(['product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.cat_id'=>$cat->id,
                        		'product_category.is_active'=>1,
                        		'product_category.is_delete'=>0]);
        $sortby = "";
		if (isset($_GET['sort_by'])) {
			$sortby = $_GET['sort_by'];
			if ($sortby == 'recent') {
				$list->orderBy('product.created_at', 'desc');
			}elseif ($sortby == 'old') {
				$list->orderBy('product.created_at', 'asc');
			}
		}

		$list = $list->get();
        $property_count = count($list);

        foreach ($list as $key => $value) {
        	$property_images = Productimages::where('product_id', $value->id)->orderBy('id', 'DESC')->first();
        	$property_images_arr = '';
        	if ($property_images) {
        		$property_images = asset('upload/product_image/'.$property_images->product_image);
        		$property_images_arr = $property_images;
        	}

	        $value->property_images = $property_images_arr;
	        $value->cat_slug = $slug;
	        $detail_link = route('front-properties-detail', ['slug' => $slug, 'slug2' => $value->slug]);
	        $value->detail_link = $detail_link;
        }
		return view('frontend.property_list', compact('list', 'property_count', 'sortby'));
	}

	public function properties_detail($slug, $slug2)
	{
		$cat_slug = $slug;
		$pro_slug = $slug2;
		$cat = Productcategory::where('slug', $cat_slug)->first();
		if (!$cat) {
			return redirect()->back();
		}
		$pro = Product::where('slug', $pro_slug)->first();

		$detail = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle')
                        ->where(['product_category.is_active'=>1,
                        		'product_category.is_delete'=>0,
                        		'product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.cat_id'=>$cat->id,
                        		'product.slug'=>$pro_slug])
                        ->first();
        if (!$detail) {
			return redirect()->back();
        }
        $detail->cat_slug = $cat_slug;
        $detail->amenities = json_decode($detail->amenities, true);
    	$detail->features = json_decode($detail->features, true);
        $floorPlanPath = public_path('upload/floor_plan/' . $detail->floor_plan);
		if (file_exists($floorPlanPath)) {
			$detail->floor_plan = asset('upload/floor_plan/'.$detail->floor_plan);
		}else{
			$detail->floor_plan = '';
		}
        
        
        $property_images = Productimages::where('product_id', $detail->id)->orderBy('id', 'DESC')->get();
    	foreach ($property_images as $key => $value) {
        	if ($value->product_image) {
        		$propertyImagePath = public_path('upload/product_image/' . $value->product_image);
				if (file_exists($propertyImagePath)) {
        			$property_image = asset('upload/product_image/'.$value->product_image);
				}else{
        			$property_image = '';
				}
        	}else{
        		$property_image = '';
        	}
        	$value->property_image = $property_image;
    	}

    	$attachments = Attachments::where('product_id', $detail->id)->orderBy('id', 'DESC')->get();
    	foreach ($attachments as $attachment) {
        	if ($value->product_image) {
        		$attachmentPath = public_path('upload/attachments/' . $attachment->file_name);
				if (file_exists($attachmentPath)) {
        			$attachment_file = asset('upload/attachments/'.$attachment->file_name);
				}else{
        			$attachment_file = '';
				}
        	}else{
        		$attachment_file = '';
        	}
        	$attachment->attachment = $attachment_file;
    	}

    	$amenities = Amenities::all();
    	$features = Features::all();
		return view('frontend.property_detail', compact('amenities', 'features', 'detail', 'property_images', 'attachments'));
	}

	public function buy_list()
	{
		$list = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle','product_category.slug AS cat_slug')
                        ->where(['product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.listed_for'=>'buy',
                        		'product_category.is_active'=>1,
                        		'product_category.is_delete'=>0]);
        $sortby = "";
		if (isset($_GET['sort_by'])) {
			$sortby = $_GET['sort_by'];
			if ($sortby == 'recent') {
				$list->orderBy('product.created_at', 'desc');
			}elseif ($sortby == 'old') {
				$list->orderBy('product.created_at', 'asc');
			}
		}

		$list = $list->get();
        $property_count = count($list);

        foreach ($list as $key => $value) {
        	$property_images = Productimages::where('product_id', $value->id)->orderBy('id', 'DESC')->first();
        	$property_images_arr = '';
        	if ($property_images) {
        		$property_images = asset('upload/product_image/'.$property_images->product_image);
        		$property_images_arr = $property_images;
        	}

	        $value->property_images = $property_images_arr;
	        $detail_link = route('front-buy-detail', ['slug' => $value->cat_slug, 'slug2' => $value->slug]);
	        $value->detail_link = $detail_link;
        }
		return view('frontend.property_list', compact('list', 'property_count', 'sortby'));
	}

	public function buy_detail($slug, $slug2)
	{
		$cat_slug = $slug;
		$pro_slug = $slug2;
		$cat = Productcategory::where('slug', $cat_slug)->first();
		if (!$cat) {
			return redirect()->back();
		}
		$pro = Product::where('slug', $pro_slug)->first();

		$detail = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle')
                        ->where(['product_category.is_active'=>1,
                        		'product_category.is_delete'=>0,
                        		'product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.cat_id'=>$cat->id,
                        		'product.slug'=>$pro_slug])
                        ->first();
        if (!$detail) {
			return redirect()->back();
        }
        $detail->cat_slug = $cat_slug;
        $detail->amenities = json_decode($detail->amenities, true);
    	$detail->features = json_decode($detail->features, true);
        $floorPlanPath = public_path('upload/floor_plan/' . $detail->floor_plan);
		if (file_exists($floorPlanPath)) {
			$detail->floor_plan = asset('upload/floor_plan/'.$detail->floor_plan);
		}else{
			$detail->floor_plan = '';
		}
        
        
        $property_images = Productimages::where('product_id', $detail->id)->orderBy('id', 'DESC')->get();
    	foreach ($property_images as $key => $value) {
        	if ($value->product_image) {
        		$propertyImagePath = public_path('upload/product_image/' . $value->product_image);
				if (file_exists($propertyImagePath)) {
        			$property_image = asset('upload/product_image/'.$value->product_image);
				}else{
        			$property_image = '';
				}
        	}else{
        		$property_image = '';
        	}
        	$value->property_image = $property_image;
    	}

    	$attachments = Attachments::where('product_id', $detail->id)->orderBy('id', 'DESC')->get();
    	foreach ($attachments as $attachment) {
        	if ($value->product_image) {
        		$attachmentPath = public_path('upload/attachments/' . $attachment->file_name);
				if (file_exists($attachmentPath)) {
        			$attachment_file = asset('upload/attachments/'.$attachment->file_name);
				}else{
        			$attachment_file = '';
				}
        	}else{
        		$attachment_file = '';
        	}
        	$attachment->attachment = $attachment_file;
    	}

    	$amenities = Amenities::all();
    	$features = Features::all();
		return view('frontend.property_detail', compact('amenities', 'features', 'detail', 'property_images', 'attachments'));
	}

	public function rent_list()
	{
		$list = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle','product_category.slug AS cat_slug')
                        ->where(['product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.listed_for'=>'rent',
                        		'product_category.is_active'=>1,
                        		'product_category.is_delete'=>0]);
        $sortby = "";
		if (isset($_GET['sort_by'])) {
			$sortby = $_GET['sort_by'];
			if ($sortby == 'recent') {
				$list->orderBy('product.created_at', 'desc');
			}elseif ($sortby == 'old') {
				$list->orderBy('product.created_at', 'asc');
			}
		}

		$list = $list->get();
        $property_count = count($list);

        foreach ($list as $key => $value) {
        	$property_images = Productimages::where('product_id', $value->id)->orderBy('id', 'DESC')->first();
        	$property_images_arr = '';
        	if ($property_images) {
        		$property_images = asset('upload/product_image/'.$property_images->product_image);
        		$property_images_arr = $property_images;
        	}

	        $value->property_images = $property_images_arr;
	        $detail_link = route('front-rent-detail', ['slug' => $value->cat_slug, 'slug2' => $value->slug]);
	        $value->detail_link = $detail_link;
        }
		return view('frontend.property_list', compact('list', 'property_count', 'sortby'));
	}

	public function rent_detail($slug, $slug2)
	{
		$cat_slug = $slug;
		$pro_slug = $slug2;
		$cat = Productcategory::where('slug', $cat_slug)->first();
		if (!$cat) {
			return redirect()->back();
		}
		$pro = Product::where('slug', $pro_slug)->first();

		$detail = DB::table('product')
                        ->join('product_category','product_category.id','=','product.cat_id')
                        ->select('product.*','product_category.id AS catid','product_category.title AS cattitle')
                        ->where(['product_category.is_active'=>1,
                        		'product_category.is_delete'=>0,
                        		'product.is_active'=>1,
                        		'product.is_delete'=>0,
                        		'product.cat_id'=>$cat->id,
                        		'product.slug'=>$pro_slug])
                        ->first();
        if (!$detail) {
			return redirect()->back();
        }
        $detail->cat_slug = $cat_slug;
        $detail->amenities = json_decode($detail->amenities, true);
    	$detail->features = json_decode($detail->features, true);
        $floorPlanPath = public_path('upload/floor_plan/' . $detail->floor_plan);
		if (file_exists($floorPlanPath)) {
			$detail->floor_plan = asset('upload/floor_plan/'.$detail->floor_plan);
		}else{
			$detail->floor_plan = '';
		}
        
        
        $property_images = Productimages::where('product_id', $detail->id)->orderBy('id', 'DESC')->get();
    	foreach ($property_images as $key => $value) {
        	if ($value->product_image) {
        		$propertyImagePath = public_path('upload/product_image/' . $value->product_image);
				if (file_exists($propertyImagePath)) {
        			$property_image = asset('upload/product_image/'.$value->product_image);
				}else{
        			$property_image = '';
				}
        	}else{
        		$property_image = '';
        	}
        	$value->property_image = $property_image;
    	}

    	$attachments = Attachments::where('product_id', $detail->id)->orderBy('id', 'DESC')->get();
    	foreach ($attachments as $attachment) {
        	if ($value->product_image) {
        		$attachmentPath = public_path('upload/attachments/' . $attachment->file_name);
				if (file_exists($attachmentPath)) {
        			$attachment_file = asset('upload/attachments/'.$attachment->file_name);
				}else{
        			$attachment_file = '';
				}
        	}else{
        		$attachment_file = '';
        	}
        	$attachment->attachment = $attachment_file;
    	}

    	$amenities = Amenities::all();
    	$features = Features::all();
		return view('frontend.property_detail', compact('amenities', 'features', 'detail', 'property_images', 'attachments'));
	}

	public function storeInquiry(Request $request)
	{
		$validatedData = $request->validate([
	        'name' => 'required|string',
	        'mobile' => 'required|string',
	        'email' => 'nullable|email',
	        'message' => 'nullable|string',
	    ]);
		if ($request->subject) {
	    	return response()->json(['status' => 'success']);
		}

		$datetime = date("d-M-Y H:i:s");
	    $inquiry = new ContactInquiry($validatedData);
	    $inquiry->created_at = $datetime;
	    $inquiry->updated_at = $datetime;
	    $inquiry->save();

	    return response()->json(['status' => 'success']);
	}

	public function blog_list()
	{
		$list = '';
		return view('frontend.blog_list', compact('list'));
	}

	public function blog_detail($slug)
	{
		$detail = '';
		return view('frontend.blog_detail', compact('detail'));
	}

	public function contact()
	{
		return view('frontend.contact');
	}

	public function about()
	{
		return view('frontend.about');
	}
}