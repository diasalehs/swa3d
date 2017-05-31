<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstDirector extends Model
{
    public function institute(){
    	return $this->belongsTo('institute');
    }
}
