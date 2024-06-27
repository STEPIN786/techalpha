<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('frontend.index');  
    }
    public function certificate($id) {
      $id = $this->enc($id, true);
      $data = Students::find($id);
      if (!$data) {
          return redirect('https://techalphainstitute.com/admin/certificate/list');
      }
      
      $link = 'https://techalphainstitute.com/public/admin/usericon.png';
      if ($data->student_image) {
          $link = 'https://techalphainstitute.com/public/upload/students/'.$data->student_image;
      }
      $data->student_image = $link;
      $data->complition_date = date('d F, Y', strtotime($data->complition_date));
      $data->backbtn = '';
      $page_title = 'Certificate';
      $is_back = 'false';
      $qrlink = 'https://techalphainstitute.com/admin/a/certificate/qr-generate/'.$this->enc($id);

      return view('frontend.certificate', compact('data','page_title', 'is_back', 'qrlink'));
  }
}
