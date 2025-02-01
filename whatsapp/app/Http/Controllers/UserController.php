<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_register(){
        return view('user.inscription');
    }

    public function store(Request $request){
        $validatedata=$request->validate([
            'username'=>'string|max:255|unique:users',
            'full_name'=>'string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8',
        ]);

        $user=User::create([
            'username'=>$validatedata['username'],
            'full_name'=>$validatedata['full_name'],
            'email'=>$validatedata['email'],
            'password'=>$validatedata['password'],
        ]);

        return redirect()->route('user.show',[$user->id])->with('success','Compte cree avec success !');

    }

    public function show($id){
        $user=User::findOrFail($id);
        return view('user.show',compact('user'));
    }

    public function show_login_form(){
        return view('user.connection');
    }

    public function login(Request $request){
        $validatedate=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        $user=User::where('email',$validatedate['email'])->first();
        if ($user&&Hash::check($validatedate['password'],$user->password)) {
            return redirect()->route('user.show',$user->id)->with('success',"Connection reussi !");
        }
        else{
            return back()->with('error',"Identififiants ou mot de passe invalide !");
        }
    }


}
