<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    public function getOverView(){
    	return view('frontend.overview');
    } 
}
