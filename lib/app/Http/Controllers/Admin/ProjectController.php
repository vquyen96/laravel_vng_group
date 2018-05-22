<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;


class ProjectController extends Controller
{
    public function getList(){
    	$data['items'] = Project::orderBy('id','desc')->paginate(5);
    	return view('backend.project', $data);
    }
    public function postAdd(Request $request){
    	$image = $request->file('img');

    	if ($request->hasFile('img')) {
	    	$project = new Project;
	    	$project->name = $request->name;
	    	$project->content = $request->content;
    		
    	
	    	$filename = $image->getClientOriginalName();
	    	$project->img = $filename;
	        $project->save();
	        $request->img->storeAs('project',$filename);
	        
		}
    	return back();
    }

    public function getEdit($id){
    	$data['edit'] = Project::find($id);
    	$data['items'] = Project::orderBy('id','desc')->paginate(5);
    	return view('backend.editproject', $data);
    }
    public function postEdit(Request $request,$id){
    	$image = $request->file('img');
        $project = Project::find($id);
        $project->name = $request->name;
        $project->content = $request->content;
    	if ($request->hasFile('img')) {
	    	$filename = $image->getClientOriginalName();
	    	$project->img = $filename;
	        $project->save();
	        $request->img->storeAs('project',$filename);
		}
    	return back()->with('success','Thay đổi thành công');
    }
    public function getDelete($id){
    	Project::destroy($id);
    	return back();
    }
}