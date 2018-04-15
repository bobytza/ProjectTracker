<?php

namespace App\Http\Controllers;

use App\Task_log_type;
use Illuminate\Http\Request;

class TaskLogTypeController extends Controller
{
    public function index()
    {
        return Task_log_type::all();
    }

    public function show(Task_log_type $task_log_type)
    {
        return $task_log_type;
    }

    public function store(Request $request)
    {
        $task_log_type = Task_log_type::create($request->all());

        return response()->json($task_log_type, 201);
    }

    public function update(Request $request, Task_log_type $Task_log_type)
    {
        $task_log_type->update($request->all());

        return response()->json($task_log_type, 200);
    }

    public function delete(Task_log_type $task_log_type)
    {
        $task_log_type->delete();

        return response()->json(null, 204);
    }
}
