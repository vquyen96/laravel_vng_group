<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;


class MemberController extends Controller
{
    public function getList(){
    	$data['items'] = Member::orderBy('id','desc')->paginate(5);
    	return view('backend.member', $data);
    }
    public function postAdd(Request $request){
    	$image = $request->file('img');

    	if ($request->hasFile('img')) {
	    	$member = new Member;
	    	$member->name = $request->name;
	    	$member->content = $request->content;
    		
    	
	    	$filename = $image->getClientOriginalName();
	    	$member->img = $filename;
	        $member->save();
	        $request->img->storeAs('member',$filename);
	        
		}
    	return back();
    }

    public function getEdit($id){
    	$data['edit'] = Member::find($id);
    	$data['items'] = Member::orderBy('id','desc')->paginate(5);
    	return view('backend.editmember', $data);
    }
    public function postEdit(Request $request,$id){
    	$image = $request->file('img');

    	$member = Member::find($id);
    	$member->name = $request->name;
    	$member->content = $request->content;

    	if ($request->hasFile('img')) {
	    	$filename = $image->getClientOriginalName();
	    	$member->img = $filename;
	        $request->img->storeAs('member',$filename);
	        return back()->with('success','Thay đổi thành công');
		}
		$member->save();
    	return back()->with('success','Thay đổi thành công');
    }
    public function getDelete($id){
    	Member::destroy($id);
    	return back();
    }
}
