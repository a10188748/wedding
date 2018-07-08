<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventWedding;
use App\EventBaby;
use App\EventSelfWedding;
use App\EventOverWedding;
use App\Eventpregnancy;

class GalleryController extends Controller
{
	private $event;
	private $id;

    protected function index(Request $request){
    	$this->event = $request->event;
    	$this->id = $request->id;
    	$data = $this->readimg($this->event,$this->id);
		return view('gallery',['alldata' => $data]);
	}
	protected function readimg($event,$id,$tag=0){
		$tag = $tag*9;
		$variable = "";
		switch ($event) {
			case 'wedding':
				$wedding = EventWedding::
					where(
                    	[['status', '=', "1"],
                    	['id', '=', $id]])
                    ->orderBy('id', 'desc')
                    ->offset($tag)->limit(9)->get();
					 $variable = $wedding;
				break;
			case 'selfwedding':
				$selfwedding = EventSelfWedding::where('status', 1)->orderBy('id', 'desc')->offset($tag)->limit(9)->get();
					 $variable = $selfwedding;
				break;
			case 'overwedding':
				$overwedding = EventOverWedding::where('status', 1)->orderBy('id', 'desc')->offset($tag)->limit(9)->get();
					 $variable = $overwedding;
				break;
			case 'pregnancy':
				$pregnancy = EventPregnancy::where('status', 1)->orderBy('id', 'desc')->offset($tag)->limit(9)->get();
					 $variable = $pregnancy;
				break;
			case 'baby':
				$baby = EventBaby::where('status', 1)->orderBy('id', 'desc')->offset($tag)->limit(9)->get();
					 $variable = $baby;
				break;
			default:
					return null;
				break;
		}
		foreach ($variable as $key => $value) {
			if($value->child_img_path != ""){
				$child_img_pathary = str_replace('"','',str_replace('[','',str_replace(']','',$value->child_img_path)));
				$child_img_pathary = explode(",",$child_img_pathary);
				foreach ($child_img_pathary as $key2 => $value2) {
					$child_img_pathary[$key2] = explode("\/",str_replace('["','',str_replace('"]','',$value2)));
					$child_img_path[$key2] = '/storage/' . $child_img_pathary[$key2][0] .'/'. $child_img_pathary[$key2][1] .'/'. $child_img_pathary[$key2][2];
				}
			 	$variable[$key]->child_img_path = $child_img_path;
			}
			else{
				$variable[$key]->child_img_path = array();
			}
		}
		return $variable;
	}
}
