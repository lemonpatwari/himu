<?php

namespace App\Http\Controllers;



use App\Teacher;
use App\Department;
use App\Designation;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $view_root = 'admin/teachers/';

    public function index()
    {
        $view = view($this->view_root . 'index');
        $view->with('teacher', Teacher::orderBy('id', 'DESC')->get());
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
        $view->with('department', Department::where('publication_status','1')->get());
        $view->with('designation', Designation::where('publication_status','1')->get());
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
//        $image      =$request->file('image');
//        $imageName  =$image->getClientOriginalName();
//        $directory  ='assets/admin/images/teachers/';
//        $image->move($directory, $imageName);

        if($request->hasFile('image')) {
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            $file->move('assets/admin/images/teachers/', $filename);
            $image = $filename;
        }



        $teacher   =new Teacher();
        $teacher->name                      = $request->name;
        $teacher->department_id            = $request->department_id;
        $teacher->designation_id           = $request->designation_id;
        $teacher->email                     = $request->email;
        $teacher->cell                      = $request->cell;
        $teacher->blood_group               = $request->blood_group;
        $teacher->education_status          = $request->education_status;
        $teacher->image                     = $image;
        $teacher->publication_status        = $request->publication_status;

        $teacher->save();

        return back()->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
//dd($teacher);
        $view = view($this->view_root . 'edit');
        $view->with('teacher', $teacher);
        $view->with('department', Department::where('publication_status','1')->get());
        $view->with('designation', Designation::where('publication_status','1')->get());
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Teacher $teacher)
    {


        if($request->hasFile('image'))
        {
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            $file->move('assets/admin/images/teachers/', $filename);
            $request['image']=$filename;
            if($teacher->image!='' && file_exists('assets/admin/images/teachers/'.$teacher->image))
            {
                unlink('assets/admin/images/teachers/'.$teacher->image);
            }

            $teacher->image                     = $filename;
        }


//        $image =$request->file('image');
//        if ($image){
//            if (file_exists($teacher->image)){
//                unlink($teacher->image);
//            }
//            $imageName  =$image->getClientOriginalName();
//            $directory  ='assets/admin/images/teachers/';
//            $image->move($directory, $imageName);
//            $teacher->image                     = $directory.$imageName;
//        }

        $teacher->name                      = $request->name;
        $teacher->department_id            = $request->department_id;
        $teacher->designation_id           = $request->designation_id;
        $teacher->email                     = $request->email;
        $teacher->cell                      = $request->cell;
        $teacher->blood_group               = $request->blood_group;
        $teacher->education_status          = $request->education_status;
        $teacher->publication_status        = $request->publication_status;
        $teacher->update();
        return redirect()->route('teacher.index')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        if($teacher->image!='' && file_exists('assets/admin/images/teachers/'.$teacher->image))
        {
            unlink('assets/admin/images/teachers/'.$teacher->image);
        }

        $teacher->delete();
        return back()->with('message','Delete Successfully');
    }
}
