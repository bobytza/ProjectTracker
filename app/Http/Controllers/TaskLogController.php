<?php

namespace App\Http\Controllers;

use App\task_log;
use Illuminate\Http\Request;

class TaskLogController extends Controller
{
    public function index()
    {
        return task_log::all();
    }

    public function show(task_log $task_log)
    {
        return $task_log;
    }

    public function store(Request $request)
    {
        $task_log = task_log::create($request->all());

        return response()->json($task_log, 201);
    }

    public function update(Request $request, task_log $task_log)
    {
        $task_log->update($request->all());

        return response()->json($task_log, 200);
    }

    public function delete(task_log $task_log)
    {
        $task_log->delete();

        return response()->json(null, 204);
    }
}
