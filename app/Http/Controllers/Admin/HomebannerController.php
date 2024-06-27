<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Students;
use DataTables,Auth;
use DB;
use PDF;

class HomebannerController extends Controller
{
    public function list()
    {
        $list = Students::where('status', 1)->get();
        foreach ($list as $ls) {
            $link = 'https://techalphainstitute.com/certificate/'.$this->enc($ls->id);
            $ls->link = $link;
        }
        $page_title = 'Certificate List';

        return view('admin.homebanner.list', compact('list','page_title'));
    }

    public function view($id)
    {
        $id = $this->enc($id, true);
        $data = Students::find($id);
        if (!$data) {
            return redirect()->route('certificate.list');
        }
        
        $link = asset('admin/usericon.png');
        if ($data->student_image) {
            $link = asset('upload/students/'.$data->student_image);
        }
        $data->student_image = $link;
        $data->complition_date = date('d F, Y', strtotime($data->complition_date));
        $data->backbtn = '';
        $page_title = 'Certificate';
        $is_back = 'true';

        return view('admin.homebanner.view', compact('data','page_title', 'is_back'));
    }

    public function add()
    {
        $page_title = 'Create Certificate';
        $services = Students::where('status', 1)->get();
        return view('admin.homebanner.create',compact('page_title','services'));
    }

    public function store(Request $request)
    {
        $date = date("d-M-Y H:i:s");
        
        $checkName = Students::where([['status','=',1],['name','=',$request->name]])->first();
        if ($checkName) {
            session()->flash('error','The name is already taken.');
            return redirect()->back();
        }
        
        // $checkName = Students::where([['status','=',1],['registration_number','=',$request->registration_number]])->first();
        // if ($checkName) {
        //     session()->flash('error','Registration Number already taken.');
        //     return redirect()->back();
        // }

        $img_name = '';
        if ($request->hasFile('student_image') && $request->student_image != '') {
            $img_path = '/upload/students';
            $img_name = $this->imageStore($request->student_image, $img_path);
        }

        $banner = Students::create([
            'name' => $request->name,
            'course' => $request->course,
            'enrollment_no' => $request->enrollment_no,
            'duration' => $request->duration,
            'score' => $request->score,
            // 'center' => $request->center,
            // 'complition_date' => $request->complition_date,
            // 'registration_number' => $request->registration_number,
            'student_image' => $img_name,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        session()->flash('success','Quotation Created');
        return redirect()->route('certificate.list');
    }

    public function edit($id)
    {
        $id = $this->enc($id, true);
        $data  = Students::find($id);
        $page_title = 'Edit Certificate';
        return view('admin.homebanner.edit', compact('data','page_title'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $date = date("d-M-Y H:i:s");
        $bannerFind = Students::find($id);
        if (!$bannerFind) {
            session()->flash('error','Certificate Not Found.');
            return redirect()->route('certificate.list');
        }

        $checkName = Students::where([['id','<>',$id],['name','=',$request->name]])->first();
        if ($checkName) {
            session()->flash('error','The name is already taken.');
            return redirect()->route('certificate.list');
        }
        
        // $checkName = Students::where([['id','<>',$id],['registration_number','=',$request->registration_number],['status','=',1]])->first();
        // if ($checkName) {
        //     session()->flash('error','Registration Number already taken.');
        //     return redirect()->route('certificate.list');
        // }

        if($request->hasFile('student_image') && $request->student_image != '') {
            if ($bannerFind->student_image) {
                $file_path = public_path().'/upload/students/'.$bannerFind->student_image;
                $unlink = $this->imageUnlink($file_path);
            }

            $file = $request->file('student_image');
            $path = '/upload/students';
            $randomName = $this->imageStore($file, $path);

            $update1 = $bannerFind->update(['student_image' => $randomName]);
        }

        $banner = $bannerFind->update([
            'name' => $request->name,
            'course' => $request->course,
            'enrollment_no' => $request->enrollment_no,
            'duration' => $request->duration,
            'score' => $request->score,
            // 'center' => $request->center,
            // 'complition_date' => $request->complition_date,
            // 'registration_number' => $request->registration_number,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        session()->flash('success','Data Updated Succesfully!');
        return redirect()->route('certificate.list');
    }


    public function delete($id)
    {
        $id = $this->enc($id,true);
        $date = date("d-M-Y H:i:s");
        $bannerFind = Students::find($id);
        if (!$bannerFind) {
            session()->flash('error','Certificate Not Found.');
            return redirect()->route('certificate.list');
        }
        $bannerFind->delete();
        session()->flash('success','Data removed!');
        return redirect()->route('certificate.list');
    }
}
