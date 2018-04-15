<?php

namespace App\Http\Controllers;

use App\Task_user;
use Illuminate\Http\Request;

class TaskUserController extends Controller
{
    public function index()
    {
        return Task_user::all();
    }

    public function show(Task_user $task_user)
    {
        return $task_user;
    }

    public function store(Request $request)
    {
        $task_user = Task_user::create($request->all());

        return response()->json($task_user, 201);
    }

    public function update(Request $request, Task_user $Task_user)
    {
        $task_user->update($request->all());

        return response()->json($task_user, 200);
    }

    public function delete(Task_user $task_user)
    {
        $task_user->delete();

        return response()->json(null, 204);
    }
}
