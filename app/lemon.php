<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lemon extends Model
{
//    protected  $fillable =['name','email','department_id0','description'];

    public function department(){
        return $this->belongsTo('App\Department');
    }

}
