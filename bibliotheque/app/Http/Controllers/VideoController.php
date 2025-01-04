<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function create(){
        return view("videos.create");
    }
    public function store(Request $request){
        $validatedata=$request->validate([
            "title"=> "required|string|max:255",
            "description"=> "required|string|max:255",
            "url"=>"required|url",
        ]);
        Video::create([
            "title"=> $validatedata["title"],
            "description"=> $validatedata["description"],
            "url"=> $validatedata["url"],
        ]);
        return redirect()->route("videos.index")->with("success","Video ajoutee avec success !");
    }

    public function index(){
        $videos=Video::all();
        return view("videos.index",compact("videos"));
    }
}
