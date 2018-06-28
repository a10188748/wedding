<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected function index(){
		 return view('gallery');
	}
}
