@extends('layouts.master')

@section('content')
<a href="{{ route('books.create') }}">Add Book</a>
<table class="table table-striped">
    <thead>
        <tr>
            <td>#</td>
            <td>Book Title</td>
            <td>Book ISBN</td>
            <td>Author</td>
            <td>Added by</td>
            <td>Publish Date</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)

        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->user->name }}</td>
            <td>{{ $book->publish_date }}</td>
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{!!  $books->links() !!}
        @endsection

