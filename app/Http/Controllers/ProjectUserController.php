<?php

namespace App\Http\Controllers;

use App\Project_user;
use Illuminate\Http\Request;

class ProjectUserController extends Controller
{
    public function index()
    {
        return Project_user::all();
    }

    public function show(Project_user $project_user)
    {
        return $project_user;
    }

    public function store(Request $request)
    {
        $project_user = Project_user::create($request->all());

        return response()->json($project_user, 201);
    }

    public function update(Request $request, Project_user $Project_user)
    {
        $project_user->update($request->all());

        return response()->json($project_user, 200);
    }

    public function delete(Project_user $project_user)
    {
        $project_user->delete();

        return response()->json(null, 204);
    }
}
