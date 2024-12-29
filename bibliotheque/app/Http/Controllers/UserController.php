<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;
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
            'phone' => 'required|string|max:9|unique:users,phone',
            'password' => 'required|string|password|max:255',
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

        // Retourner la vue avec les données de l'utilisateur
        return view('user.show',compact('user','books'));

    }

    public function show_connectionPage(){
        return view('connection');
    }

    public function check_connection(Request $request,$id){
        $request->validate([
            'email'=>"required|email",
            'password'=>'required|password',
        ]);
        $user = User::where('email',$request->email)->first();
        if($user && Hash::check($request->password,$user->password)){
            $user = User::findOrFail($id);
            return view('user.show',compact('user'));
        }

        return redirect()->back()->withErrors(['email'=> 'Email ou mot de passe incorrects'])->withInput();
    }
    public function show_all($id){
        $user = User::findOrFail($id);
        return view('user.show_all',compact('user'));
    }
}
