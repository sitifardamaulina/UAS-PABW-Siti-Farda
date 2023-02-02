<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trusted;

class DashboardTrusted extends Controller
{
    public function index()
    {
        return view('admin.trusted.trusted',[
            'trusted' => Trusted::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trusted.posttrusted');
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
            'image' => 'image|file|max:1024',
            'image2' => 'image|file|max:1024',
            'description' => '',
            'title' => 'required',
            'subtitle' => '',

        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
            $validateData['image2'] = $request->file('image')->store('upload_image');
        }

        Trusted::create($validateData);

        return redirect('/dashboard/trusted')->with('success','Trusted has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trusted  $trusted
     * @return \Illuminate\Http\Response
     */
    public function show(Trusted $trusted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trusted  $Trusted
     * @return \Illuminate\Http\Response
     */
    public function edit(Trusted $trusted)
    {
        return view('admin.trusted.edittrusted',[
            'trusted' => $trusted
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trusted  $trusted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trusted $trusted)
    {
        $validateData =  $request->validate([
            'image' => 'image|file|max:1024',
            'image2' => 'image|file|max:1024',
            'description' => '',
            'title' => 'required',
            'subtitle' => '',

        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
            $validateData['image2'] = $request->file('image')->store('upload_image');
        }
        Trusted::where('id',$trusted->id)
                ->update($validateData);

        return redirect('/dashboard/trusted')->with('success','Trusted has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trusted  $trusted
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trusted $trusted)
    {
        // return $Trusted;
        Trusted::destroy($trusted->id);

        return redirect('/dashboard/trusted')->with('success','Trusted has been delete');
    }
}
