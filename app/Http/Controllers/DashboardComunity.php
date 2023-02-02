<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunity;

class DashboardComunity extends Controller
{
    public function index() //read
    {
        return view('admin.comunity.comunity',[
            'comunity' => Comunity::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comunity.postcomunity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //create
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'subtitle' => '',
            'description' => '',
            'images' => 'image|file|max:1024',
        ]);

        if($request->file('images')){
            $validateData['images'] = $request->file('images')->store('upload_image');
        }

        Comunity::create($validateData);

        return redirect('/dashboard/comunity')->with('success','Comunity  has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function show(Comunity $comunity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function edit(Comunity $comunity)
    {
        return view('admin.comunity.editcomunity',[
            'comunity' => $comunity
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comunity $comunity) //update
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'subtitle' => '',
            'description' => '',
            'images' => 'image|file|max:1024',
        ]);
        Comunity::where('id',$comunity->id)
                ->update($validateData);

        return redirect('/dashboard/comunity')->with('success','Comunity  has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comunity $comunity) //delete
    {
        // return $Comunity;
        Comunity::destroy($comunity->id);

        return redirect('/dashboard/comunity')->with('success','About  has been delete');
    }
}
