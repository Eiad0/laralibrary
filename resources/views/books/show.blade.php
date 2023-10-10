@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-2 border border-light shadow p-3 mb-5 bg-body-tertiary rounded">
                <h2>About This Book</h2>
                <h2>{{ $book->title }}</h2>
                <div class="form-group">
                    <label for="book-title" class="form-control">Book Title</label>
                    <input disabled id="book-title" class="form-control" value="{{ $book->title }}"/>


                </div>
            </div>
            <div class="col-md-4 ml-1 border border-light shadow p-3 mb-5 bg-body-tertiary rounded">
                <h2>About The Author</h2>
                <h2>{{ $book->author->name }}</h2>
            </div>
        </div>
    @endsection
