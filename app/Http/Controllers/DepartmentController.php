<?php

namespace App\Http\Controllers;

use App\Department;
use App\Teacher;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    private $view_root = 'admin/master-data/department/';

    public function index()
    {
        $view = view($this->view_root . 'index');
        $view->with('department', Department::orderBy('id', 'DESC')->get());
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = view($this->view_root . 'create');
        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department();
        $department->department_name    = $request->department_name;
        $department->publication_status = $request->publication_status;
        $department->save();

        return back()->with('message','Insert Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $view = view($this->view_root . 'edit');
        $view->with('department', $department);
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $department->department_name    = $request->department_name;
        $department->publication_status = $request->publication_status;
        $department->save();
        return redirect()->route('department.index')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $teacher=Teacher::where('department_id', $department->id)->first();
        if ($teacher){
            return back()->with('message','Sorry We can not delete this Department because some Teacher have this Department' );
        }else{
            $department->delete();
            return back()->with('message','Delete Successfully');
        }



    }
}
