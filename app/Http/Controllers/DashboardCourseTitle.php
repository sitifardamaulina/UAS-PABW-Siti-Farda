<?php

namespace App\Http\Controllers;

use App\Models\CourseTitle;
use Illuminate\Http\Request;

class DashboardCourseTitle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.coursetitle.coursetitle',[
            'coursetitle' => CourseTitle::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coursetitle.postcoursetitle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'description' => '',
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
        }

        CourseTitle::create($validateData);

        return redirect('/dashboard/coursetitle')->with('success','CourseTitle has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseTitle  $coursetitle
     * @return \Illuminate\Http\Response
     */
    public function show(CourseTitle $coursetitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseTitle  $coursetitle
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseTitle $coursetitle)
    {
        return view('admin.coursetitle.editcoursetitle',[
            'CourseTitle' => $coursetitle
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseTitle  $coursetitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseTitle $coursetitle)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'description' => '',
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
        }
        CourseTitle::where('id',$coursetitle->id)
                ->update($validateData);

        return redirect('/dashboard/coursetitle')->with('success','CourseTitle has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseTitle  $coursetitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseTitle $coursetitle)
    {
        // return $CourseTitle;
        CourseTitle::destroy($coursetitle->id);

        return redirect('/dashboard/coursetitle')->with('success','CourseTitle has been delete');
    }
}
