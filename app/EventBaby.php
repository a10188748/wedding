<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class EventBaby extends Model
{
    protected $table = 'event_baby';
    protected $columns = array('id','title','body','date','location');
}
