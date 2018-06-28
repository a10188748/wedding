<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class EventWedding extends Model
{
    protected $table = 'event_wedding';
    protected $columns = array('id','title','body','date','location');
}
