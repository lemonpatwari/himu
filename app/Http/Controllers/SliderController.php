<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $view_root='admin/slider/';
    public function index()
    {
        $view=view($this->view_root .'index');
        $view->with('sliders',Slider::orderBy('id', 'DESC')->get());
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view=view($this->view_root .'create');
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
        $image      =$request->file('slider_image');
        $imageName  =$image->getClientOriginalName();
        $directory  ='assets/admin/images/sliders/';
        $image->move($directory, $imageName);

        $slider=new Slider();
        $slider->slider_image = $directory.$imageName;
        $slider->publication_status = $request->publication_status;
        $slider->save();

        return back()->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $view=view($this->view_root . 'edit');
        $view->with('slider',$slider);
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $image      =$request->file('slider_image');
        if ($image){
            if (file_exists($slider->slider_image)){
                unlink($slider->slider_image);
            }
            $imageName  =$image->getClientOriginalName();
            $directory  ='assets/admin/images/sliders/';
            $image->move($directory, $imageName);
            $slider->slider_image = $directory.$imageName;
        }
        $slider->publication_status = $request->publication_status;
        $slider->update();

        return redirect()->route('slider.index')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if (file_exists($slider->slider_image)){
            unlink($slider->slider_image);
        }
        $slider->delete();
        return back()->with('message','Delete Successfully');
    }
}
