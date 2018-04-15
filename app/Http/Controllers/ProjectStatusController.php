<?php

namespace App\Http\Controllers;

use App\Project_status;
use Illuminate\Http\Request;

class ProjectStatusController extends Controller
{
    public function index()
    {
        return Project_status::all();
    }

    public function show(Project_status $project_status)
    {
        return $project_status;
    }

    public function store(Request $request)
    {
        $project_status = Project_status::create($request->all());

        return response()->json($project_status, 201);
    }

    public function update(Request $request, Project_status $Project_status)
    {
        $project_status->update($request->all());

        return response()->json($project_status, 200);
    }

    public function delete(Project_status $project_status)
    {
        $project_status->delete();

        return response()->json(null, 204);
    }
}
