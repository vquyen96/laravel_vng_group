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
    	$data['item'] = About::find(1);
    	return view('backend.about', $data);
    }
    public function postLetter(Request $request){
    	$data = About::find(1);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getDetail(){
    	$data['item'] = About::find(2);
    	return view('backend.about', $data);
    }
    public function postDetail(Request $request){
    	$data = About::find(2);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getHistory(){
    	$data['item'] = About::find(3);
    	return view('backend.about', $data);
    }
    public function postHistory(Request $request){
    	$data = About::find(3);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getVision(){
    	$data['item'] = About::find(4);
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
    	$data['item'] = About::find(5);
    	return view('backend.about', $data);
    }
    public function postCultural(Request $request){
    	$data = About::find(5);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getDownload(){
    	$data['item'] = About::find(6);
    	return view('backend.about', $data);
    }
    public function postDownload(Request $request){
    	$data = About::find(6);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }

}
