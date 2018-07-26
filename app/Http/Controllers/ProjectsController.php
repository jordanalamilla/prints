<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view( 'projects/index' )->with( 'projects', $projects );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'projects/create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'                 => 'required',
            'description'           => 'required',
            'media'                 => 'required',
            'date'                  => 'required',
            'prints_available'      => 'required',
            'print_size'            => 'required',
            'print_price'           => 'required',
            'original_size'         => 'nullable',
            'original_price'        => 'nullable'
        ]);

        $project = new Project();

        $project->title             = $request->input( 'title' );
        $project->description       = $request->input( 'description' );
        $project->media             = $request->input( 'media' );
        $project->creation_date     = $request->input( 'date' );
        $project->image             = 'example.jpg';
        $project->prints_available  = $request->input( 'prints_available' );
        $project->print_size        = $request->input( 'print_size' );
        $project->print_price       = $request->input( 'print_price' );
        $project->original_size     = $request->input( 'original_size' );
        $project->original_price    = $request->input( 'original_price' );

        $project->save();

        return redirect( 'dashboard' )->with( 'success', $project->title . ' successfully created.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find( $id );
        return view( 'projects/show' )->with( 'project', $project );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find( $id );
        return view( 'projects/edit' )->with( 'project', $project );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'                 => 'required',
            'description'           => 'required',
            'media'                 => 'required',
            'date'                  => 'required',
            'prints_available'      => 'required',
            'print_size'            => 'required',
            'print_price'           => 'required',
            'original_size'         => 'nullable',
            'original_price'        => 'nullable'
        ]);

        $project = Project::find( $id );

        $project->title             = $request->input( 'title' );
        $project->description       = $request->input( 'description' );
        $project->media             = $request->input( 'media' );
        $project->creation_date     = $request->input( 'date' );
        // $project->image             = 'example.jpg';
        $project->prints_available  = $request->input( 'prints_available' );
        $project->print_size        = $request->input( 'print_size' );
        $project->print_price       = $request->input( 'print_price' );
        $project->original_size     = $request->input( 'original_size' );
        $project->original_price    = $request->input( 'original_price' );

        $project->save();

        return redirect( 'dashboard' )->with( 'success', $project->title . ' successfully updated.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find( $id );
        $project->delete();

        return redirect( '/dashboard' )->with( 'success', $project->title . ' successfully deleted.' );
    }
}
