<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
class AccountController extends Controller
{
    public function getList(){
    	if(Auth::user()->level != 1){
    		return redirect('admin/about/letter');
    	}

    	$data['items'] = User::orderBy('id','desc')->paginate(8);
    	return view('backend.account', $data);
    }
    public function postAdd(Request $request){
    	$user = new User;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->level = $request->level;
    	$user->save();
    	return back();
    }

    public function getEdit($id){
    	$data['edit'] = User::find($id);
    	$data['items'] = User::orderBy('id','desc')->paginate(8);
    	return view('backend.editaccount', $data);
    }
    public function postEdit(Request $request,$id){
    	$image = $request->file('img');

    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->content = $request->content;

    	if ($request->hasFile('img')) {
	    	$filename = $image->getClientOriginalName();
	    	$user->img = $filename;
	        $request->img->storeAs('user',$filename);
	        return back()->with('success','Thay đổi thành công');
		}
		$user->save();
    	return back()->with('success','Thay đổi thành công');
    }
    public function getDelete($id){
    	User::destroy($id);
    	return back();
    }
}
