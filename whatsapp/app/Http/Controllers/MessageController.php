<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show_select_chat(){
        return view('user.chat-select');
    }
    public function show_chat(){
        return view('user.chat');
    }
    public function index(){
        $messages=Message::with('user')->orderBy('created_at','asc')->get();
        return view('user.chat',compact('messages'));
    }

    public function store(Request $request){
        $validatedata=$request->validate([
            'message'=>"required|string|max:1000",
        ]);

        $message=Message::create([
            'user_id'=>Auth::id(),
            'message'=>$validatedata['message'],
        ]);

        return redirect()->route('message.index')->with('success',"Message Envoye !");
    }
}
