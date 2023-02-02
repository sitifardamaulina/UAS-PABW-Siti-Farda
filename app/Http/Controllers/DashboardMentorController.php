<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class DashboardMentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//read
    {
        return view('admin.mentor.mentor',[
            'mentor' => Mentor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mentor.postmentor');
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
            'description' => '',
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
        }

        Mentor::create($validateData);

        return redirect('/dashboard/mentor')->with('success','Mentor has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show(Mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentor $mentor)
    {
        return view('admin.mentor.editmentor',[
            'Mentor' => $mentor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentor $mentor)//update
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'description' => '',
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
        }

        Mentor::where('id',$mentor->id)
                ->update($validateData);

        return redirect('/dashboard/mentor')->with('success','Mentor has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mentor  $Mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentor $mentor)//delete
    {
        // return $Mentor;
        Mentor::destroy($mentor->id);

        return redirect('/dashboard/mentor')->with('success','Mentor has been delete');
    }
}
