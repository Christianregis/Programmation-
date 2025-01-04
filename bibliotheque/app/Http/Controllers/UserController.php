<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'full_name' => 'required|string|max:255',
            'status' => 'required|string',
            'phone' => 'required|string|max:9|min:9|unique:users,phone',
            'password' => 'required|string|min:8',
        ]);


        // Sauvegarde dans la base de données
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'full_name' => $validatedData['full_name'],
            'status' => $validatedData['status'],
            'phone' => $validatedData['phone'],
            'password' => bcrypt($validatedData['password']), // Crypter le mot de passe si possible en utilisant le bcript()
        ]);

        // Redirection vers la page des détails de l'utilisateur
        return redirect()->route('user.show', ['id'=>$user->id]);
    }

    public function index(){
        $total_users=User::count();
        return view('welcome',compact('total_users'));
    }
    public function show($id)
    {
        // Récupérer l'utilisateur par son ID
        $user = User::findOrFail($id);
        $books=Book::all();
        $videos=Video::all();

        // Retourner la vue avec les données de l'utilisateur
        return view('user.show',compact('user','books','videos'));

    }

    public function filter_index_title(Request $request,$id){
        $search=$request->input('search');
        $user=User::findOrFail($id);
        $videos=Video::all();
        if($search){
            $books=Book::where('title','LIKE','%'.$search.'%')->get();
        }
        else{
            $books=Book::all();
        }
        return view('user.show', ['books'=>$books,'user'=>$user,'videos'=>$videos]);
    }

    public function show_connectionPage(){
        return view('connection');
    }

    public function login(Request $request){
        $email=$request->input('email');
        $password=$request->input('password');

        $user=DB::table('users')->where('email',$email)->first();
        if($user && Hash::check($password,$user->password)){
            return redirect()->route('user.show', ['id'=>$user->id]);
        }
        else{
            return back()->withErrors(['message'=> 'Email ou mot de passe invalide']);
        }
    }

    public function delete ($id){
        $user=User::findOrFail( $id );
        $user->delete();
        $total_users=User::count();
        return redirect()->route('home',compact('total_users'))->with('success','Votre Compte a ete supprime avec success !');
    }

    public function show_delete_form($id){
        $user=User::findOrFail( $id );
        return view('user.show_delete_form',compact('user'));
    }

    public function show_all($id){
        $user = User::findOrFail($id);
        return view('user.show_all',compact('user'));
    }
}
