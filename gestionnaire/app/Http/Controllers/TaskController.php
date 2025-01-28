<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){
        $validatedata = $request->validate([
            'title'=> 'required|string|max:255',
            "description"=> 'required|string|max:255',
            "priority"=> 'required|string|in:Haute,Moyenne,Basse',

        ]);

        $task=Task::create([
            "title"=> $validatedata["title"],
            "description"=> $validatedata["description"],
            "priority"=> $validatedata["priority"],
            "time"=>$request->input("time"),
        ]);
        return redirect()->route('show_task',["id"=>$task->id]);
    }

    public function show_task(){
        $task=Task::all();
        return view('show_task',compact('task'));
    }

    public function markAsDone($id){
        $task=Task::findOrFail($id);
        $task->is_complete=true;
        $task->save();
        return redirect()->back()->with('success','Tache Faite !');
    }

    public function destroy($id){
        $task=Task::findOrFail($id);
        $task->delete();
        return redirect()->back()->with('success','Tache supprimee avec success !');
    }

    public function filter(Request $request){
        $result=$request->input('search');
        $task=Task::where('title','like','%'.$result.'%')->orwhere('description','like','%'.$result.'%')->get();
        return view('show_task',compact('task'));

    }
}
