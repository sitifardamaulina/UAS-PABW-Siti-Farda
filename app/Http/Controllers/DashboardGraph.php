<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graph;

class DashboardGraph extends Controller
{
    public function index()
    {
        return view('admin.graph.graph',[
            'graph' => Graph::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.graph.postgraph');
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

        Graph::create($validateData);

        return redirect('/dashboard/graph')->with('success','Graph has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function show(Graph $graph)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function edit(Graph $graph)
    {
        return view('admin.graph.editgraph',[
            'graph' => $graph
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graph $graph)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'description' => '',
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('upload_image');
        }
        Graph::where('id',$graph->id)
                ->update($validateData);

        return redirect('/dashboard/graph')->with('success','Graph has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graph $graph)
    {
        // return $Graph;
        Graph::destroy($graph->id);

        return redirect('/dashboard/graph')->with('success','Graph has been delete');
    }
}
