<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;
class ImageController extends Controller
{
	public function getHome(){
    	
    	return redirect('admin/image/edit/1');
    }
    public function getEdit($id){
    	$data['edit'] = Image::find($id);
    	$data['items'] = Image::all();
    	return view('backend.image', $data);
    }
    public function postEdit(Request $request,$id){
    	$fileimage = $request->file('img');
    	
    	if ($request->hasFile('img')) {
    		$image = Image::find($id);
	    	$filename = $fileimage->getClientOriginalName();
	    	$image->img = $filename;
	        $image->save();
	        $request->img->storeAs('image',$filename);
	        return back()->with('success','Thay đổi hình ảnh thành công');
		}
    	return back()->with('error','Không có hình ảnh mới');
    }

    
}
