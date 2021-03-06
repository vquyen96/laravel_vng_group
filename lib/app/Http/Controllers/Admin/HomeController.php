<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home;

class HomeController extends Controller
{
    public function getHome(){
        return redirect('admin/home/detail/overview');
    }
    public function getList($name){
    	switch ($name) {

    		case 'overview':
    			$data['data'] = Home::find(1);
    			break;
            case 'vision':
                $data['data'] = Home::find(2);
                break;
            case 'cultural':
                $data['data'] = Home::find(3);
                break;
            case 'history':
                $data['data'] = Home::find(4);
                break;
    		case 'bds':
    			$data['data'] = Home::find(5);
    			break;
    		case 'appraisal':
    			$data['data'] = Home::find(6);
    			break;
    		case 'law':
    			$data['data'] = Home::find(7);
    			break;
    		case 'media':
    			$data['data'] = Home::find(8);
    			break;
            case 'tiktak':
                $data['data'] = Home::find(9);
                break;
            case 'vpcc':
                $data['data'] = Home::find(10);
                break;
            
            
    		default:
    			$data['data'] = null;
    			break;
    	}
    	return view('backend.home',$data);
    }
    public function postEdit(Request $request, $name){
    	switch ($name) {
    		case 'overview':
                $data = Home::find(1);
                break;
            case 'vision':
                $data = Home::find(2);
                break;
            case 'cultural':
                $data = Home::find(3);
                break;
            case 'history':
                $data = Home::find(4);
                break;
            case 'bds':
                $data = Home::find(5);
                break;
            case 'appraisal':
                $data = Home::find(6);
                break;
            case 'law':
                $data = Home::find(7);
                break;
            case 'media':
                $data = Home::find(8);
                break;
            case 'tiktak':
                $data = Home::find(9);
                break;
            case 'vpcc':
                $data = Home::find(10);
                break;
    		default:
    			dd("error");
    			break;
    	}
    	$data->title = $request->title;
    	$data->content = $request->content;
        $data->link = $request->link;
    	$fileimage = $request->file('file');
        if ($request->file('file') != null) {
            $filename = time() . '.' .$fileimage->getClientOriginalName();
            $data->img = $filename;
            $request->file->storeAs('home',$filename);
        }
        $data->save();
    	return back();
    }
}
