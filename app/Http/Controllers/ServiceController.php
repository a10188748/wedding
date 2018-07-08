<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCopywrite;

class ServiceController extends Controller
{
	protected function index(){
		 return view('service');
	}
	protected function serwedding(){
		$copywrite = $this->get_copywrite('1');
		// $values = $this->get_values('wedding',0);
		return view('service_1',[
								'copywrite' => $copywrite]);
	}
	protected function serselfwedding(){
		 return view('service_2');
	}
	protected function seroverwedding(){
		 return view('service_3');
	}
	protected function serpregnancy(){
		 return view('service_4');
	}
	protected function serbaby(){
		 return view('service_5');
	}
	protected function get_copywrite($id) {
		$copywrite = ServiceCopywrite::where('id', $id)->get();
		return $copywrite;
	}
}
