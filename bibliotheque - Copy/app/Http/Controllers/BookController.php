<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;
class BookController extends Controller
{
    public function create(){
        return view('books.create');
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'title'=> 'required|string|max:255',
            'author'=> 'required|string|max:255',
            'description'=>'required|string|max:100',
            'file'=> 'required|mimes:pdf|max:20480',
        ]);
        $path=$request->file('file')->store('books/','public');

        Book::create([
            'title'=> $validateData['title'],
            'author'=> $validateData['author'],
            'description'=> $validateData['description'],
            'file_path'=> $path,
        ]);
        return redirect()->route('books.index')->with('success','Livre ajoute avec success !');
    }

    public function index(){
        $books=Book::all();
        return view('books.index',compact('books'));
    }

    public function download($id){
        $book=Book::findOrFail($id);
        $filePath=public_path('app/public/storage/books/'. $book->file_path);

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error','Fichier introuvable');
        }
        return response()->download($filePath) ;
    }
}
