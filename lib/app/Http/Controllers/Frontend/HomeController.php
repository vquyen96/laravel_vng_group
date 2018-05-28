<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\News;
use App\Models\Home;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Video;

class HomeController extends Controller
{
    public function getHome(){
        $data['data'] = Home::all();
    	return view('frontend.home', $data);
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
        $data['investment'] = Project::where('type', 0)->get();
        $data['distribution'] = Project::where('type', 1)->get();

    	return view('frontend.project', $data);
    } 
    public function getProjectDetail($slug){
        $data['item'] = Project::where('slug', $slug)->first();
        return view('frontend.project_detail',$data);
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
        $data['video'] = Video::paginate(10);
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
        $data['video'] = Video::where('slug', $slug)->first();
        $data['video_related'] = Video::paginate(5);
        return view('frontend.video_detail', $data);
    }
    public function getRecruit(){
        $data['recruit'] = News::where('type',6)->orderBy('created_at', 'desc')->paginate(3);
        $data['new'] = News::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.recruit',$data);
    }
    public function getContact(){
        $data['data'] = Contact::all();
        return view('frontend.contact', $data);

    }
}
