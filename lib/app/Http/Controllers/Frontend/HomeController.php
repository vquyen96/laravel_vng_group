<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\News;
class HomeController extends Controller
{
    public function getHome(){
        
    	return view('frontend.home');
    }
    public function getOverView(){
        $data['letter'] = About::where('name','Thư ngỏ')->get();
        $data['history'] = About::where('name','Lịch sử')->get();
        $data['vision'] = About::where('name','Tầm nhìn')->get();
        $data['culture'] =About::where('name','Văn hóa')->get();
        $data['ceo'] = About::where('name','CEO')->get();
    	return view('frontend.overview', $data);
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
        $data['featured_slide'] = News::where('type',1)->orderBy('created_at', 'desc')->paginate(4);
        $data['featured_right'] = News::where('type',1)->orderBy('created_at', 'desc')->paginate(2);
        $data['internal'] = News::where('type',2)->orderBy('created_at', 'desc')->paginate(3);
        $data['project'] = News::where('type',3)->orderBy('created_at', 'desc')->paginate(5);
        $data['press'] = News::where('type',4)->orderBy('created_at', 'desc')->paginate(3);

        return view('frontend.news',$data);
    }
    public function getNewsDetail($slug){
        $data['news'] = News::where('slug', $slug)->first();
        $type = $data['news']->type;
        
        $data['related'] = News::where('type', $type)->orderBy('created_at', 'desc')->paginate(3);
        $data['new'] = News::orderBy('created_at', 'desc')->paginate(5);
        $data['internal'] = News::where('type',2)->orderBy('created_at', 'desc')->paginate(3);
        return view('frontend.news_detail', $data);
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
