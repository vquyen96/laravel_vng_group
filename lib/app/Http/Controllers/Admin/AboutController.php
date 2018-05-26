<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function getList(){
    	return redirect('admin/about/letter');
    }
    public function getLetter(){
    	$data['items'] = About::where('name','Thư ngỏ')->get();

    	return view('backend.about', $data);
    }
    public function postAbout(Request $request, $id){
        $content = "content".$id;
    	$data = About::find($id);
    	$data->title = $request->title;
    	$data->content = $request->$content;
        $fileimage = $request->file('file');
        
        if ($request->file('file') != null) {
            $filename = time() . '.' .$fileimage->getClientOriginalName();
            $data->img = $filename;
            $request->file->storeAs('about',$filename);
        }
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    
    public function getHistory(){
    	$data['items'] = About::where('name','Lịch sử')->get();
    	return view('backend.about', $data);
    }
    public function postHistory(Request $request, $id){
    	$content = "content".$id;
        $data = About::find($id);
        $data->title = $request->title;
        $data->content = $request->$content;
        $fileimage = $request->file('file');
        
        if ($request->file('file') != null) {
            $filename = time() . '.' .$fileimage->getClientOriginalName();
            $data->img = $filename;
            $request->file->storeAs('about',$filename);
        }
        $data->save();
        return back()->with('success','Sửa Thành Công');
    }
    public function getVision(){
    	$data['items'] = About::where('name','Tầm nhìn')->get();
    	return view('backend.about', $data);
    }
    public function postVision(Request $request){
    	$data = About::find(4);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getCultural(){
    	$data['items'] =About::where('name','Lịch sử')->get();
    	return view('backend.about', $data);
    }
    public function postCultural(Request $request){
    	$data = About::find(5);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getCEO(){
    	$data['items'] = About::where('name','Lịch sử')->get();
    	return view('backend.about', $data);
    }
    public function postCEO(Request $request){
    	$data = About::find(6);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }

}
