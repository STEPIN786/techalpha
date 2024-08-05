<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamdeatailsController extends Controller
{
    public function index(){
        return view('frontend.team-details');
    }
}
