<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventWedding;
use App\EventBaby;
use App\EventParty;

class EventsController extends Controller
{
    protected function index(){
    	echo 1111;exit;
	}

	protected function wedding(){

		$values = $this->get_values('wedding',0);
		
		
		// print_r($values);exit;
		return view('events_1',['weddings' => $values]);
	}

	protected function baby(){
		return view('events_2');
	}

	protected function party(){
		return view('events_3');
	}

	public function get_event(Request $request){
		$values = $this->get_values($request->event,$request->tag);

		return json_encode($values);
	}

	protected function get_values($event,$tag=0){
		$tag = $tag*9;
		$variable = "";

		switch ($event) {
			case 'wedding':
				$wedding = EventWedding::where('status', 1)->orderBy('id', 'desc')->offset($tag)->limit(9)->get();
					 $variable = $wedding;
				break;
			case 'baby':
				$baby = EventBaby::where('status', 1)->orderBy('id', 'desc')->offset($tag)->limit(9)->get();
					 $variable = $baby;
				break;
			case 'party':
				$paty = EventParty::where('status', 1)->orderBy('id', 'desc')->offset($tag)->limit(9)->get();
					 $variable = $party;
				break;
			default:
					return null;
				break;
		}
// print_r($variable);exit;
		foreach ($variable as $key => $value) {
			if($value->img_path != ""){
				$variable[$key]->img_path = '/storage/' . $value->img_path;
			
			}
			else
			{
				$variable[$key]->img_path = "";
			}
		}
		return $variable;
	}
}
