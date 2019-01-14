<?php

namespace App\Http\Controllers;

use App\Designation;
use App\Teacher;
use Illuminate\Http\Request;

class DetailsShow extends Controller
{
    public function teachers($id){
        $teachers =Teacher::find($id);
        $designation=Designation::find($teachers->designation_id);
        return view('front.teachers.details',compact('teachers','designation'));
    }

}
