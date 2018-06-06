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
    public function getAdd(){
        return view('backend.addproject');
    }
    public function postAdd(Request $request){
        $project = new Project;
        $project->name = $request->name;
        $project->featured = $request->featured;
        $project->slug = str_slug($request->name);
        $project->investor = $request->investor;
        $project->overviewContent = $request->overviewContent;
        $project->locationContent = $request->locationContent;
        $project->utilityContent = $request->utilityContent;
        $project->type = $request->type;

    	$image = $request->file('img');
    	if ($request->hasFile('img')) {
	    	$project->img = saveImage([$image], 360, 'project');
		}
        $image = $request->file('overviewImg');
        if ($request->hasFile('overviewImg')) {
            $filename =  time() . '.' .$image->getClientOriginalName();
            $project->overviewImg = $filename;
            $request->overviewImg->storeAs('project',$filename);
        }
        $image = $request->file('locationImg');
        if ($request->hasFile('locationImg')) {
            $filename =  time() . '.' .$image->getClientOriginalName();
            $project->locationImg = $filename;
            $request->locationImg->storeAs('project',$filename);
        }
        $image = $request->file('utilityImg');
        if ($request->hasFile('utilityImg')) {
            $filename =  time() . '.' .$image->getClientOriginalName();
            $project->utilityImg = $filename;
            $request->utilityImg->storeAs('project',$filename);
        }
        for ($i=1; $i < 9; $i++) { 
            $albumImg = 'albumImg'.$i;

            $image = $request->file($albumImg);
            if ($request->hasFile($albumImg)) {
                $filename =  time() . '.' .$image->getClientOriginalName();
                $project->$albumImg = $filename;
                $request->$albumImg->storeAs('project',$filename);
            }
        }
            
        

        $project->save();
    	return redirect('admin/project')->with('error','Dự án phải có hình ảnh');
    }

    public function getEdit($id){
    	$data['edit'] = Project::find($id);
    	return view('backend.editproject', $data);
    }
    public function postEdit(Request $request,$id){
        $project = Project::find($id);

        $project->name = $request->name;
        $project->slug = str_slug($request->name);
        $project->featured = $request->featured;
        $project->investor = $request->investor;
        $project->overviewContent = $request->overviewContent;
        $project->locationContent = $request->locationContent;
        $project->utilityContent = $request->utilityContent;
        $project->type = $request->type;

        $image = $request->file('img');
        if ($request->hasFile('img')) {
            // $filename =  time() . '.' .$image->getClientOriginalName();
            $project->img = saveImage([$image], 360, 'project');
        }
        $image = $request->file('overviewImg');
        if ($request->hasFile('overviewImg')) {
            $filename =  time() . '.' .$image->getClientOriginalName();
            $project->overviewImg = $filename;
            $request->overviewImg->storeAs('project',$filename);
        }
        $image = $request->file('locationImg');
        if ($request->hasFile('locationImg')) {
            $filename =  time() . '.' .$image->getClientOriginalName();
            $project->locationImg = $filename;
            $request->locationImg->storeAs('project',$filename);
        }
        $image = $request->file('utilityImg');
        if ($request->hasFile('utilityImg')) {
            $filename =  time() . '.' .$image->getClientOriginalName();
            $project->utilityImg = $filename;
            $request->utilityImg->storeAs('project',$filename);
        }
        $image = $request->file('ablumImg1');
        // if ($request->hasFile('ablumImg1')) {
        //     $filename =  time() . '.' .$image->getClientOriginalName();
        //     $project->ablumImg1 = $filename;

        //     $request->ablumImg1->storeAs('project',$filename);
        // }
        for ($i=1; $i < 9; $i++) { 
            $albumImg = 'albumImg'.$i;
            
            $image = $request->file($albumImg);
            if ($request->hasFile($albumImg)) {
                $filename =  time() . '.' .$image->getClientOriginalName();
                $project->$albumImg = $filename;

                $request->$albumImg->storeAs('project',$filename);
            }
        }
            
        
        $project->save();
    	return redirect('admin/project')->with('success','Thay đổi thành công');
    }
    public function getDelete($id){
        $project = Project::find($id);
        $namefile = $project->img;
        File::delete('libs/storage/app/project/'.$namefile);
        File::delete('libs/storage/app/project/resized-'.$namefile);
        $project->delete();  
    	return back();
    }
}
