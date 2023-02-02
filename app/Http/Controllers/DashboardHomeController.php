<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class DashboardHomeController extends Controller
{
    public function index()
    {
        return view('admin.home.home',[
            'header' => Header::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.posthome');
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

        Header::create($validateData);

        return redirect('/dashboard/header')->with('success','Header Section has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('admin.home.edithome',[
            'header' => $header
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'description' => '',
            'images' => 'image|file|max:1024',
        ]);

        if($request->file('images')){
            $validateData['images'] = $request->file('images')->store('upload_image');
        }
        Header::where('id',$header->id)
                ->update($validateData);

        return redirect('/dashboard/header')->with('success','Header Section has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        // return $Header;
        Header::destroy($header->id);

        return redirect('/dashboard/header')->with('success','Header Section has been delete');
    }
}
