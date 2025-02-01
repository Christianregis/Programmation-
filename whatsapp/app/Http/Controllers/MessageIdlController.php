<?php

namespace App\Http\Controllers;

use App\Models\MessageIdl;
use Illuminate\Http\Request;
use Auth;

class MessageIdlController extends Controller
{
    public function show_chat(){
        return view('user.chat-idl');
    }
    public function index(){
        $messages=MessageIdl::with('user')->orderBy('created_at','asc')->get();
        return view('user.chat-idl',compact('messages'));
    }

    public function store(Request $request){
        $validatedata=$request->validate([
            'message'=>"required|string|max:1000",
        ]);

        $message=MessageIdl::create([
            'user_id'=>Auth::id(),
            'message'=>$validatedata['message'],
        ]);

        return redirect()->route('messageidl.index')->with('success',"Message Envoye !");
    }
}
