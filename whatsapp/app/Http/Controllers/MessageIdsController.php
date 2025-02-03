<?php

namespace App\Http\Controllers;

use App\Models\MessageIds;
use Illuminate\Http\Request;
use Auth;

class MessageIdsController extends Controller
{
    public function show_chat(){
        return view('user.chat-ids');
    }
    public function index(){
        $messages=MessageIds::with('user')->orderBy('created_at','asc')->get();
        return view('user.chat-ids',compact('messages'));
    }

    public function store(Request $request){
        $validatedata=$request->validate([
            'message'=>"required|string|max:1000",
        ]);

        $message=MessageIds::create([
            'user_id'=>Auth::id(),
            'message'=>$validatedata['message'],
        ]);

        return redirect()->route('messageids.store')->with('success',"Message Envoye !");
    }
}
