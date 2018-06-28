<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class IndexBanner extends Model
{
    protected $table = 'index_banner';
    protected $columns = array('title_1','title_2','body');
}
