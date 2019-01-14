<?php

namespace App\Http\Controllers;

use App\Designation;
use App\Teacher;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $view_root = 'admin/master-data/designation/';

    public function index()
    {
        $view = view($this->view_root . 'index');
        $view->with('designation', Designation::orderBy('id', 'DESC')->get());
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
       $designation = new Designation();
       $designation->designation_name = $request->designation_name;
       $designation->publication_status = $request->publication_status;
       $designation->save();

        return back()->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(Designation $designation)
    {
        $view = view($this->view_root . 'edit');
        $view->with('designation', $designation);
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designation $designation)
    {
        $designation->designation_name    = $request->designation_name;
        $designation->publication_status = $request->publication_status;
        $designation->save();
        return redirect()->route('designation.index')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designation $designation)
    {
        $teacher=Teacher::where('designation_id', $designation->id)->first();
        if ($teacher){
            return back()->with('message','Sorry We can not delete this Designation because some Teacher have this Designation' );
        }else{
            $designation->delete();
            return back()->with('message','Delete Successfully');
        }
    }
}
