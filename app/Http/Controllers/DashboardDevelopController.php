<?php

namespace App\Http\Controllers;

use App\Models\Develop;
use Illuminate\Http\Request;

class DashboardDevelopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.develop.develop',[
            'develop' => Develop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.develop.postdevelop');
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

        Develop::create($validateData);

        return redirect('/dashboard/develop')->with('success','Develop has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Develop  $develop
     * @return \Illuminate\Http\Response
     */
    public function show(Develop $develop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Develop  $develop
     * @return \Illuminate\Http\Response
     */
    public function edit(Develop $develop)
    {
        return view('admin.develop.editdevelop',[
            'Develop' => $develop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Develop  $develop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Develop $develop)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'description' => '',
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
        }

        Develop::where('id',$develop->id)
                ->update($validateData);

        return redirect('/dashboard/develop')->with('success','Develop has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Develop  $Develop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Develop $develop)
    {
        // return $Develop;
        Develop::destroy($develop->id);

        return redirect('/dashboard/develop')->with('success','Develop has been delete');
    }
}
