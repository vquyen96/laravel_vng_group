<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
	public function getHome(){
    	return redirect('admin/news/vng');
    }
    public function getVNG(){

    	$data['items'] = News::where('type',1)->orderBy('id','desc')->paginate();
    	return view('backend.news', $data);

    }
    public function postAdd(Request $request){
    	$news = new News;
    	$news->title = $request->title;
	    $news->content = $request->content;
    	$image = $request->file('img');
    	switch($request->segment(3)) {
    		case 'vng':
    			$news->type = 1;
    			break;
    		case 'project':
    			$news->type = 2;
    			break;
    		case 'recruit':
    			$news->type = 3;
    			break;	
    	}
    	if ($request->hasFile('img')) {
	    	$filename = $image->getClientOriginalName();
	    	$news->img = $filename;
	        $news->save();
	        $request->img->storeAs('news',$filename);
		}
    	return back();
    }
    public function getProject(){
    	$data['items'] = News::where('type',2)->orderBy('id','desc')->paginate();
    	return view('backend.news', $data);
    }
    public function getRecruit(){
    	$data['items'] = News::where('type',3)->orderBy('id','desc')->paginate();
    	return view('backend.news', $data);
    }

    public function getEdit($id){
    	$data['edit'] = News::find($id);
    	return view('backend.editnews', $data);
    }
    public function postEdit(Request $request,$id){
    	$image = $request->file('img');

    	$news = News::find($id);
    	$news->title = $request->title;
    	$news->content = $request->content;

    	if ($request->hasFile('img')) {
	    	$filename = $image->getClientOriginalName();
	    	$news->img = $filename;
	        $request->img->storeAs('news',$filename);
	        return back()->with('success','Thay đổi thành công');
		}
		$news->save();
    	return back()->with('success','Thay đổi thành công');
    }
    public function getDelete($id){
    	News::destroy($id);
    	return back();
    }
}
