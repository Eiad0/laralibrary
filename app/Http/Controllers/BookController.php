<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $books=Book::latest()->paginate(5);
       return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'isbn'=>'required',
            'publish_date'=>'required',
            'user_id'=>'required',
            'author_id'=>'required',
        ]);
        Book::create($request->post());
        return redirect('/books.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
         return view('books.show',compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        // if(Gate::denies('update-book',$book)){
        //     abort(403,"You can't update this book");
        // }
        // if (! Gate::allows('update-book', $book)) {
        //     abort(403);
        // }
        $users=User::all();
        $authors=Author::all();
        return view('books.edit',compact('book','authors','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Book  $book)
    {
        // dd($book);
        // if(Gate::denies('update-book',$book)){
        //     abort(403,"You can't update this book");
        // }
        $validated = $request->validate([
            'title'=>'required',
            'isbn'=>'required',
            'publish_date'=>'required',
            'user_id'=>'required',
            'author_id'=>'required',
        ]);

        $book->update($validated);
        // dd($book);
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books.index');
    }
}
