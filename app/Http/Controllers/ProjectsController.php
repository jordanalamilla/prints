<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'original_available'    => 'required',
            'original_size'         => 'nullable',
            'original_price'        => 'nullable',
            'thumb_image'           => 'image|required|max:1999',
            'full_image'            => 'image|required|max:1999'
        ]);

        // FILE UPLOADS
        $thumb_image        = $request->file( 'thumb_image' );
        $full_image         = $request->file( 'full_image' );

        //GENERATE UNIQUE FILE NAME
        $originalFileName   = $thumb_image->getClientOriginalName();
        $parts              = explode( '.', $originalFileName );
        $name               = $parts[ 0 ];
        $ext                = $parts[ 1 ];
        $time               = time();
        $finalFileName      = "$name-$time.$ext";

        //UPLOAD IMAGES TO STORAGE
        $thumb_image->storeAs( 'public/img/projects/thumb', $finalFileName );     // UPLOAD THUMB
        $full_image->storeAs( 'public/img/projects/full', $finalFileName );     // UPLOAD FULL
        //$ php artisan storage:link





        $project = new Project();

        $project->title                 = $request->input( 'title' );
        $project->description           = $request->input( 'description' );
        $project->media                 = $request->input( 'media' );
        $project->creation_date         = $request->input( 'date' );
        $project->image                 = $finalFileName;
        $project->prints_available      = $request->input( 'prints_available' );
        $project->print_size            = $request->input( 'print_size' );
        $project->print_price           = $request->input( 'print_price' );
        $project->original_available    = $request->input( 'original_available' );
        $project->original_size         = $request->input( 'original_size' );
        $project->original_price        = $request->input( 'original_price' );

        $project->save();

        return redirect( 'dashboard' )->with( 'success', $project->title . ' successfully created.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request, $id )
    {
        $project = Project::find( $id );

        if( $project->original_available == 'yes' ) {
            $request->session()->flash( 'success', 'This original drawing is available for purchase. Check <a href="/about">ABOUT</a> for more info.' );
        }

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
            'original_available'    => 'nullable',
            'original_size'         => 'nullable',
            'original_price'        => 'nullable'
        ]);

        $project = Project::find( $id );

        $project->title                 = $request->input( 'title' );
        $project->description           = $request->input( 'description' );
        $project->media                 = $request->input( 'media' );
        $project->creation_date         = $request->input( 'date' );
        // $project->image             = 'example.jpg';
        $project->prints_available      = $request->input( 'prints_available' );
        $project->print_size            = $request->input( 'print_size' );
        $project->print_price           = $request->input( 'print_price' );
        $project->original_available    = $request->input( 'original_available' );
        $project->original_size         = $request->input( 'original_size' );
        $project->original_price        = $request->input( 'original_price' );

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

        //DELETE IMAGES : use Illuminate\Support\Facades\Storage;
        Storage::delete( 'public/img/projects/thumb/' . $project->image );
        Storage::delete( 'public/img/projects/full/' . $project->image );

        $project->delete();

        return redirect( '/dashboard' )->with( 'success', $project->title . ' successfully deleted.' );
    }
}
