<?php

namespace App\Http\Controllers;

use App\Task_status;
use Illuminate\Http\Request;

class TaskStatusController extends Controller
{
    public function index()
    {
        return Task_status::all();
    }

    public function show(Task_status $task_status)
    {
        return $task_status;
    }

    public function store(Request $request)
    {
        $task_status = Task_status::create($request->all());

        return response()->json($task_status, 201);
    }

    public function update(Request $request, Task_status $Task_status)
    {
        $task_status->update($request->all());

        return response()->json($task_status, 200);
    }

    public function delete(Task_status $task_status)
    {
        $task_status->delete();

        return response()->json(null, 204);
    }
}
