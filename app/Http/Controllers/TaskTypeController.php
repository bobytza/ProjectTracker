<?php

namespace App\Http\Controllers;

use App\Task_type;
use Illuminate\Http\Request;

class TaskTypeController extends Controller
{
    public function index()
    {
        return Task_type::all();
    }

    public function show(Task_type $task_type)
    {
        return $task_type;
    }

    public function store(Request $request)
    {
        $task_type = Task_type::create($request->all());

        return response()->json($task_type, 201);
    }

    public function update(Request $request, Task_type $Task_type)
    {
        $task_type->update($request->all());

        return response()->json($task_type, 200);
    }

    public function delete(Task_type $task_type)
    {
        $task_type->delete();

        return response()->json(null, 204);
    }
}
