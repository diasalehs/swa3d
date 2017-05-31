<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    public function article(){
    	return $this->hasMany('article');
    }
}
