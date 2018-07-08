<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventWedding;
use App\EventBaby;
use App\EventOverWedding;
use App\EventSelfWedding;
use App\EventPregnancy;
use App\EventCopywrite;

class EventsController extends Controller
{
    protected function index(){
    	// echo 1111;exit;	
	}

	protected function wedding(){
		$copywrite = $this->get_copywrite('1');
		$values = $this->get_values('wedding',0);
		return view('events_1',['weddings' => $values,
								'copywrite' => $copywrite]);
	}

	protected function selfwedding(){
		$copywrite = $this->get_copywrite('2');
		$values = $this->get_values('selfwedding',0);
		return view('events_2',['selfweddings' => $values,
								'copywrite' => $copywrite]);
	}

	protected function overwedding(){
		$copywrite = $this->get_copywrite('3');
		$values = $this->get_values('overwedding',0);
		return view('events_3',['overweddings' => $values,
								'copywrite' => $copywrite]);
	}

	protected function pregnancy(){
		$copywrite = $this->get_copywrite('4');
		$values = $this->get_values('pregnancy',0);
		return view('events_4',['pregnancys' => $values,
								'copywrite' => $copywrite]);
	}

	protected function baby(){
		$copywrite = $this->get_copywrite('5');
		$values = $this->get_values('baby',0);
		return view('events_5',['babys' => $values,
								'copywrite' => $copywrite]);
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
	protected function get_copywrite($id) {
		$copywrite = EventCopywrite::where('id', $id)->get();
		return $copywrite;
	}
}
