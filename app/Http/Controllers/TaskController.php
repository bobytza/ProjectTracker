<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use App\Client;
use App\Task_log;
use App\Task_user;
use App\Priority;
use App\Mail\mailme;
use Illuminate\Http\Request;
use App\User;
use Mail;

class TaskController extends Controller
{
    public function getUnassignedTasks()
    {
      $task_logs = Task_log::where('task_status_id', 4)->get();
      $tasks = array();
      foreach ($task_logs as $task_log) {
        array_push($tasks, app('App\Http\Controllers\TaskLogController')->getTask($task_log));
      }

      return $tasks;
    }

    public function getProject(Task $task)
    {
      return Project::find($task->project_id);
    }

    public function getClient(Task $task)
    {
      $project = self::getProject($task);
      return app('App\Http\Controllers\ProjectController')->getClient($project);
    }

    public function getPriority(Task $task)
    {
      $priority = Priority::find($task->priority_id);
      return $priority->priority;
    }

    public function index()
    {
        //Mail::to("b.dumitrana@yahoo.com")->send(new mailme)
        return Task::all();
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return response()->json($project, 201);
    }

    public function update(Request $request, Task $task)
    {
        $task->find($task->id);
        $task->update($request->all());
        $changes = $task->getChanges();

        $users = Task_user::where('task_id', $task->id)->get();

        foreach ($users as $user) {
          $title = "Proiectul <" . $task->task_title . "> updatat!";
          $content = $task;

          Mail::send('emails.send', ['title' => $title, 'content' => implode(" ", $changes)],
           function ($message) use ($user)
          {

              $message->from('ProjectTracker@arggo.consulting', 'ProjectTracker');

              $message->to(User::find($user->id)->email);

          });
        }

        return response()->json($task, 200);
    }

    public function delete(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}
