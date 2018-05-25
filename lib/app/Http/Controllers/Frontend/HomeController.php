<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHome(){
    	return view('frontend.home');
    }
    public function getOverView(){
    	return view('frontend.overview');
    } 
    public function getProject(){
    	return view('frontend.project');
    } 
    public function getProjectDetail(){
        return view('frontend.project_detail');
    }
    public function getQHDT(){
        return view('frontend.qhdt');
    }
    public function getNews(){
        return view('frontend.news');
    }
    public function getNewsDetail($slug){
        return view('frontend.news_detail');
    }
    public function getVideoDetail($slug){
        return view('frontend.video_detail');
    }
    public function getRecruit(){
        return view('frontend.recruit');

    }
    public function getContact(){
        return view('frontend.contact');

    }
}
