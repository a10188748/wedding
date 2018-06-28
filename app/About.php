<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class About extends Model
{
    protected $table = 'about';
    protected $columns = array('title','body','foot','img_path');
}
