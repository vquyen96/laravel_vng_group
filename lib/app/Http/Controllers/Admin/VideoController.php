<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function getList(){
    	$data['video'] = Video::paginate(8);
    	return view('backend.video' , $data);
    }
    public function postAdd(Request $request){
    	$vid = new Video;
    	$vid->name = $request->name;
    	$vid->slug = str_slug($request->name);
    	$vid->content = $request->content;
    	$image = $request->file('img');
    	if ($request->hasFile('img')) {
	    	$filename =  time() . '.' .$image->getClientOriginalName();
	    	$vid->img = $filename;
	        $request->img->storeAs('video',$filename);
		}

		$video = $request->file('video');
        
        if ($request->hasFile('video')) {
            $filename = time() . '.' . $video->getClientOriginalExtension();
            $vid->video = $filename;
            $path = public_path().'/uploads/';
            $video->move($path, $filename);
        }
		$vid->save();
		return back();
    }
    public function getEdit($id){
    	$data['video'] = Video::paginate(8);
    	$data['edit'] = Video::find($id);
    	return view('backend.editvideo', $data);

    }
    public function postEdit(Request $request, $id){
    	$vid = Video::find($id);
    	$vid->name = $request->name;
    	$vid->slug = str_slug($request->name);
    	$vid->content = $request->content;
    	$image = $request->file('img');
    	if ($request->hasFile('img')) {
	    	$filename =  time() . '.' .$image->getClientOriginalName();
	    	$vid->img = $filename;
	        $request->img->storeAs('video',$filename);
		}

		$video = $request->file('video');
        
        if ($request->hasFile('video')) {
            $filename = time() . '.' . $video->getClientOriginalExtension();
            $vid->video = $filename;
            $path = public_path().'/uploads/';
            $video->move($path, $filename);
        }
		$vid->save();
		return back();
    }

}
