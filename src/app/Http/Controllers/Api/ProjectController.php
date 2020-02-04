<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
    $projects = Project::orderBy('_id', 'desc')->get();
    return $projects;
    }

    public function all()
    {
    $projects = Project::all();
    return $projects;
    }

    public function find($id)
    {
    $projects = Project::find($id);
    return $projects;
    }

    public function where($name)
    {
    $projects = Project::where('name','=',$name)->get();
    return $projects;
    }
}
