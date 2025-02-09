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
            'message'=>'required|string|max:5000',
            'parent_id'=>'nullable|exists:messages,id',
        ]);

        Message::create([
            'user_id'=>Auth::id(),
            'message'=>$validatedata['message'],
            'parent_id'=>$request->parent_id ?? null,
        ]);

        return redirect()->route('message.index')->with('success',"Message Envoye !");
    }

    public function show_message_reply($id){
        $message=Message::findOrFail($id);
        return view('user.chat_reply',compact('message'));
    }
}
