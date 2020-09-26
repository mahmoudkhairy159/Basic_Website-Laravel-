<?php

namespace App\Http\Controllers;

use App\Models\Message as ModelsMessage;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        ModelsMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,

        ]);
        session()->flash('success', 'Message Sent', ['timeout' => 100]);
        return redirect('/');
    }
    public function getMessages(){
        $messages=ModelsMessage::all();
        return view('home')->with('messages',$messages);
    }

}
