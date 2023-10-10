@extends('layouts.master')
@section('content')
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Book Title</td>
                        <td>Book ISBN</td>
                        <td>Author</td>
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
                        <td>{{ $book->publish_date }}</td>
                        <td>
                            <form action="{{ route('deleteBook',$book->id) }}" method="POST">
                                @csrf

                            <a class="btn btn-primary" href="{{ route('editBook',$book->id) }}">Edit</a>
                           
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {!!  $books->links() !!}
        @endsection

