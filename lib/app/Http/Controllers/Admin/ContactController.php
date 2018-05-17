<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
class ContactController extends Controller
{
    public function getHome(){
        
    	return redirect('admin/contact/top');
    }
    public function getTop(){
    	$data['item'] = Contact::find(1);
    	return view('backend.contact', $data);
    }
    public function postTop(Request $request){
    	$data = Contact::find(1);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getMid(){
    	$data['item'] = Contact::find(2);
    	return view('backend.contact', $data);
    }
    public function postMid(Request $request){
    	$data = Contact::find(2);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
    public function getBot(){
    	$data['item'] = Contact::find(3);
    	return view('backend.contact', $data);
    }
    public function postBot(Request $request){
    	$data = Contact::find(3);
    	$data->name = $request->name;
    	$data->content = $request->content;
    	$data->save();
    	return back()->with('success','Sửa Thành Công');
    }
}
