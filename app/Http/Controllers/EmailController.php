<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class EmailController extends Controller
{
  public function send(Request $request)
  {
     $title = $request->input('title');
     $content = $request->input('content');

     Mail::send('emails.send', ['title' => $title, 'content' => $content,],
      function ($message) use ($request)
     {

         $message->from('ProjectTracker@arggo.consulting', 'ProjectTracker');

         $message->to($request->input('emailaddr'));

     });



     return response()->json(['message' => 'Mail sent']);
   }
}
