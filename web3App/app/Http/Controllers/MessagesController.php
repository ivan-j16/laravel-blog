<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required|alpha|between:1,20',
            'email'=>'required|email'
        ]);

        // Create new message with the use of the Message model
        $message = new Message;
        $message->name = $request->input('name'); //what we get in the form
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //Save message
        $message->save();

        //Redirect to home with a success message of 'message Sent' (flash messages)
        return redirect('/')->with('success','Message Sent');

    }
    //With the use of Eloquent ORM, we assign a variable messages and we make it a List again with the use of the Messages model
    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages',$messages);
    }
}
