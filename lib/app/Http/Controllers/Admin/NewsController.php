<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
	public function getHome(){
    	return redirect('admin/news/detail/featured');
    }
    public function getList($name){
        
        switch ($name) {
            case 'featured':
                $type = 1;
                break;
            case 'internal':
                $type = 2;
                break;
            case 'project':
                $type = 3;
                break;
            case 'press':
                $type = 4;
                break;
            case 'socially':
                $type = 5;
                break;
            case 'recruit':
                $type = 6;
                break;
            case 'video':
                $type = 7;
                break;
            default:
                $type = 1;
                break;
        }
    	$data['items'] = News::where('type', $type)->orderBy('id','desc')->paginate();
    	return view('backend.news', $data);

    }
    public function getAdd(){
        return view('backend.addnews');
    }
    public function postAdd(Request $request){
    	$news = new News;
    	$news->title = $request->title;
        $news->slug = str_slug($request->title);
	    $news->content = $request->content;
        $news->type = $request->type;
    	$image = $request->file('img');
    	if ($request->hasFile('img')) {
	    	$filename = time() . '.'.$image->getClientOriginalName();
	    	$news->img = $filename;
	        $request->img->storeAs('news',$filename);
            $news->save();
            return redirect('admin/news')->with('success', 'Tin tức thêm thành công');
		}
    	return redirect('admin/news')->with('error', 'Tin tức của bạn phải có hình ảnh');
    }
    // public function getProject(){
    // 	$data['items'] = News::where('type',2)->orderBy('id','desc')->paginate();
    // 	return view('backend.news', $data);
    // }
    // public function getRecruit(){
    // 	$data['items'] = News::where('type',3)->orderBy('id','desc')->paginate();
    // 	return view('backend.news', $data);
    // }

    public function getEdit($id){
    	$data['edit'] = News::find($id);
    	return view('backend.editnews', $data);
    }
    public function postEdit(Request $request,$id){
    	$image = $request->file('img');
    	$news = News::find($id);
    	$news->title = $request->title;
        $news->slug = str_slug($request->title);
    	$news->content = $request->content;
        $news->type = $request->type;
    	if ($request->hasFile('img')) {
	    	$filename = time() . '.' .$image->getClientOriginalName();
	    	$news->img = $filename;
	        $request->img->storeAs('news',$filename);
	        return redirect('admin/news')->with('success','Thay đổi thành công');
		}
		$news->save();
    	return redirect('admin/news')->with('success','Thay đổi thành công');
    }
    public function getDelete($id){
    	News::destroy($id);
    	return back();
    }
}
