<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndexBanner;

class IndexController extends Controller
{
	protected function index(){

		$banners = IndexBanner::where('status', 1)->orderBy('id', 'asc')->get();

		$int = 1;

		foreach ($banners as $banner => $value) {
			 $value->img_path = explode("\/",str_replace('["','',str_replace('"]','',$value->img_path)));
			 $banners[$banner]->img_path='/storage/' . $value->img_path[0] . '/' . $value->img_path[1].'/'.$value->img_path[2];
			 $banners[$banner]->num = $int;
			 $int ++;
		}
		return view('index',['banners' => $banners]);
	}
}
