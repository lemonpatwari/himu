<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function department(){
        return $this->belongsTo('App\Department');

//        return $this->belongsTo('App\Department');
    }
    public function designation(){
        return $this->belongsTo('App\Designation');
    }
}
