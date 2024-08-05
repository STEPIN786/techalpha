<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursedetailsController extends Controller
{
       public function index(){
        return view('frontend.course-details');
    }
}
