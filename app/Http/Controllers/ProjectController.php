<?php

namespace App\Http\Controllers;

use App\Project;
use App\Customer;
use App\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getClient(Project $project)
    {
      return Customer::find($project->customer_id);
    }

    public function getTasks(Project $project)
    {
      return Task::where('project_id', $project->id)->get();
    }

    public function index()
    {
        return Project::all();
    }

    public function show(Project $project)
    {
        return $project;
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());

        return response()->json($project, 201);
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return response()->json($project, 200);
    }

    public function delete(Project $project)
    {
        $project->delete();

        return response()->json(null, 204);
    }
}
