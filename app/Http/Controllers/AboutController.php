<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    protected function index(){
    	$about = About::where('status', 1)->orderBy('updated_at', 'desc')->get();
    	
    	$about[0]['img_path'] = explode("\/",str_replace('["','',str_replace('"]','',$about[0]['img_path'])));
    	$about[0]['img_path']='/storage/' . $about[0]['img_path'][0] . '/' . $about[0]['img_path'][1].'/'.$about[0]['img_path'][2];
		return view('about',['about'=> $about[0]]);
	}
}
