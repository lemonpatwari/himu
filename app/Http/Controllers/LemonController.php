<?php

namespace App\Http\Controllers;

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
        $view =view ($this->view_root . 'create');
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
        ]);

       lemon::create($request->all());
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
        //
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
        dd($request);
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
       $lmn=lemon::find($id);
       $lmn->active= 0;
       $lmn->update();
       return back()->with('message','Deactive Successfully');
    }

    public function activeAction($id){
       $lmn=lemon::find($id);
       $lmn->active= 1;
       $lmn->update();
       return back()->with('message','Active Successfully');
    }
}
