<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\List_Contact;

class ListContact extends Controller
{
   	public function getList(){
   		$data['items'] = List_Contact::orderBy('created_at','desc')->paginate(10);
   		return view('backend.contact_list', $data);
   	}
   	public function postAdd(Request $request){
   		// dd($request);
   		$list_con = New List_Contact;
   		$list_con->list_con_name = $request->name;
   		$list_con->list_con_email = $request->email;
   		$list_con->list_con_content = $request->content;
   		$list_con->list_con_status = 1;
   		$list_con->save();
   		return back()->with('success', 'Liên hệ thành công');
   	}
   	public function delete($id){
   		List_Contact::destroy($id);
   		return back();
   	}
}
