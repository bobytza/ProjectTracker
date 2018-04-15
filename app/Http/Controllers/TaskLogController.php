<?php

namespace App\Http\Controllers;

use App\Task_log;
use App\Task_status;
use App\Task;
use Illuminate\Http\Request;

class TaskLogController extends Controller
{
      public function getTask(Task_log $task_log)
      {
        //$task = NULL;
        //foreach ($task_logs as $task_log) {
          //$task = $task + Task::find($task_log->task_id);
        //}
        //return $task;
        return Task::find($task_log->task_id);
      }

      public function getTaskStatus(Task_log $task_log)
      {
        return Task_status::find($task_log->task_status_id);
      }

      public function getUnassignedTask(Task_log $task_log)
      {
          $task = self::getTask($task_log);
          $task_status = self::getTaskStatus($task_log);

          if ($task_status->id == 4) {
            return $task;
          }
      }



    public function index()
    {
        return Task_log::all();
    }

    public function show(task_log $task_log)
    {
        return $task_log;
    }

    public function store(Request $request)
    {
        $task_log = Task_log::create($request->all());

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
