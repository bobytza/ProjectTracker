<?php

namespace App\Http\Controllers;

use App\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function index()
    {
        return Priority::all();
    }

    public function show(Priority $priority)
    {
        return $priority;
    }

    public function store(Request $request)
    {
        $priority = Priority::create($request->all());

        return response()->json($priority, 201);
    }

    public function update(Request $request, Priority $priority)
    {
        $priority->update($request->all());

        return response()->json($priority, 200);
    }

    public function delete(Priority $priority)
    {
        $priority->delete();

        return response()->json(null, 204);
    }
}
