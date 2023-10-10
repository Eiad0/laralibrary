@extends('layouts.master')
@section('content')
    <form action="{{ route('updateBook', $book->id) }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        <label for="title"> Title:</label>
        <input id="title" type="text" name="title" value="{{ $book->title }}">

        <label for="isbn"> ISBN:</label>
        <input id="isbn" type="text" name="isbn" value="{{ $book->isbn }}">

        <label for="date"> Publish Date:</label>
        <input id="date" type="date" name="publish_date" value="{{ $book->publish_date }}">

        <label for="author"> Author:</label>
        <select name="author_id">
            @foreach ($authors as $author)
                <option value="{{ $book->author->id }}" selected>{{ $book->author->name }}</option>
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        {{-- <input id="author" type="text" name="author_id" value="{{ $book->author_id }}"> --}}

        <input type="submit" value="Submit">
    </form>
@endsection
