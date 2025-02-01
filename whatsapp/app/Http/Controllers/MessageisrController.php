<?php

namespace App\Http\Controllers;
use App\Models\Messageirs;
use Illuminate\Http\Request;
use Auth;

class MessageisrController extends Controller
{
    public function show_chat(){
        return view('user.chat-isr');
    }
    public function index(){
        $messages=Messageirs::with('user')->orderBy('created_at','asc')->get();
        return view('user.chat-isr',compact('messages'));
    }

    public function store(Request $request){
        $validatedata=$request->validate([
            'message'=>"required|string|max:1000",
        ]);

        $message=Messageirs::create([
            'user_id'=>Auth::id(),
            'message'=>$validatedata['message'],
        ]);

        return redirect()->route('messageisr.index')->with('success',"Message Envoye !");
    }
}
