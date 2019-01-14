<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RpirController extends Controller
{
    public function home(){
        $slider=Slider::where('publication_status','1')->get();
        return view('front.home.home',compact('slider'));
    }
    public function civilTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Civil')->get();
        return view('front.teachers.civil.teachers',compact('teacher'));
    }
    public function computerTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Computer')->get();
        return view('front.teachers.computer.teachers',compact('teacher'));
    }
    public function mechanicalTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Mechanical')->get();
        return view('front.teachers.mechanical.teachers',compact('teacher'));
    }
    public function powerTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Power')->get();
        return view('front.teachers.power.teachers',compact('teacher'));
    }
    public function electronicsTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Electronics')->get();
        return view('front.teachers.electronics.teachers',compact('teacher'));
    }
    public function rsDepartmentTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Rs-Department')->get();
        return view('front.teachers.rs-department.teachers',compact('teacher'));
    }
    public function electroMedicalTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Electro-Medical')->get();
        return view('front.teachers.electro-medical.teachers',compact('teacher'));
    }
    public function electricallTeachers(){
        $teacher    =DB::table('teachers')
                    ->join('departments', 'teachers.department_id', '=','departments.id')
                    ->join('designations', 'teachers.designation_id', '=','designations.id')
                    ->select('teachers.*', 'departments.department_name','designations.designation_name')->where('teachers.publication_status','1')
                    ->where('departments.department_name','Electrical')->get();
        return view('front.teachers.electrical.teachers',compact('teacher'));
    }

}
