<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view( 'dashboard' )->with( 'projects', $projects );
    }
}
