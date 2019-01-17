<?php

namespace App\Http\Controllers;


use App\Department;
use App\lemon;
use Illuminate\Http\Request;

class LemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $view_root = 'admin/master-data/lemon/';
    public function index()
    {
        $view =view ($this->view_root . 'index');
        $view->with('lemon', lemon::orderBy('id','desc')->get());
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = \App\Department::all();
        $view =view ($this->view_root . 'create',compact('departments'));
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


        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'department_id'=>'required',
        ]);

       $lemon =new lemon();

       $lemon->name             =$request->name;
       $lemon->email            =$request->email;
       $lemon->department_id    =$request->department_id;
       $lemon->description      =$request->description;
       $lemon->save();

       return back()->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lemon  $lemon
     * @return \Illuminate\Http\Response
     */
    public function show(lemon $lemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lemon  $lemon
     * @return \Illuminate\Http\Response
     */
    public function edit(lemon $lemon)
    {

        $view =view ($this->view_root . 'edit');
        $view->with('departments', Department::all());
        $view->with('lemon',$lemon);
        return $view;


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lemon  $lemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lemon $lemon)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'department_id'=>'required',
        ]);

        $lemon->name             =$request->name;
        $lemon->email            =$request->email;
        $lemon->department_id    =$request->department_id;
        $lemon->description      =$request->description;
        $lemon->update();

        return redirect()->route('lemon.index')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lemon  $lemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(lemon $lemon)
    {
        //
    }

    public function deactiveAction($id){
       $lemon=lemon::find($id);
       $lemon->active= 0;
       $lemon->update();
       return back()->with('message','Deactive Successfully');
    }

    public function activeAction($id){
       $lemon=lemon::find($id);
       $lemon->active= 1;
       $lemon->update();
       return back()->with('message','Active Successfully');
    }
}
