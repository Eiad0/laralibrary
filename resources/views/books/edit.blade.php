@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Books</h5>
          <form action="{{ route('books.update', $book->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="inputNanme4" class="form-label">Book Name</label>
              <input type="text" class="form-control" placeholder="Book Title" name="title" value="{{ $book->title }}">
            </div>
            <div class="col-md-6">
                <label for="inputNanme4" class="form-label">Book ISBN</label>
              <input type="text" class="form-control" placeholder="ISBN" name="isbn" value="{{ $book->isbn }}">
            </div>
            <div class="col-md-6">
                <label for="inputNanme4" class="form-label">Publish Date</label>
              <input type="date" class="form-control" placeholder="Publish Date"  name="publish_date" value="{{ $book->publish_date }}">
            </div>
            <div class="col-md-4">
                <label for="inputNanme4" class="form-label">Author Name</label>
              <select id="inputState" class="form-select" name="author_id" value="{{ $book->author_id }}">
                @foreach ($authors as $author)
                <option value="{{ $book->author->id }}" selected>{{ $book->author->name }}</option>
                <option value="{{ $author->id }}">{{ $author->name }}</option>
                 @endforeach
              </select>
            </div>
            <div class="col-md-4">
                <label for="inputNanme4" class="form-label">Author Name</label>
              <select id="inputState" class="form-select" name="user_id" value="{{ $book->user_id }}">
                @foreach ($users as $user)
                <option value="{{ $book->user->id }}" selected>{{ $book->user->name }}</option>
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                 @endforeach
              </select>
            </div>
            <div class="text-center">
              <input type="submit" class="btn btn-primary">
              <input type="reset" class="btn btn-secondary">
            </div>
          </form><!-- End No Labels Form -->
        </div>
      </div>
@endsection

