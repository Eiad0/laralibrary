<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $books=Book::latest()->paginate(5);
        return view('books.index',compact('books'));
    }
    public function create(){
        return view('books.create');
    }

    public function store(Request $req){
        $req->validate([
            'title'=>'required',
            'isbn'=>'required',
            'publish_date'=>'required',
            'author_id'=>'required',
        ]);
        Book::create($req->post());
        return redirect('/dashboard');
        }

    public function edit(Book $book){
        // dd($book);
        $authors=Author::all();
        return view('books.edit',compact('book','authors'));
    }

    public function update(Request $req,Book $book){
        $validated = $req->validate([
            'title'=>'required',
            'isbn'=>'required',
            'publish_date'=>'required',
            'author_id'=>'required',
        ]);
        // dd($book);
        // dd($validated);
        $book->update($validated);
        return redirect('/dashboard');
    }
    public function delete(Book $book){
        $book->delete();
        return redirect('/dashboard');
    }
}
