<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboardCourse extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//read
    {
        return view('admin.course.course',[
            'course' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.postcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//create
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'price' => '',
            'rating' => '',
            'teacher' => '',
            'job' => '',
            'video' => '',
            'image' => 'image',
            'image_bg' => 'image',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
            $validateData['image_bg'] = $request->file('image')->store('upload_image');
        }

        Course::create($validateData);

        return redirect('/dashboard/course')->with('success','Course has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.course.editcourse',[
            'Course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)//update
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'price' => '',
            'rating' => '',
            'teacher' => '',
            'job' => '',
            'video' => '',
            'image' => 'image',
            'image_bg' => 'image',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
            $validateData['image_bg'] = $request->file('image')->store('upload_image');
        }
        Course::where('id',$course->id)
                ->update($validateData);

        return redirect('/dashboard/course')->with('success','Course has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)//delete
    {
        // return $Course;
        Course::destroy($course->id);

        return redirect('/dashboard/course')->with('success','Course has been delete');
    }
}
