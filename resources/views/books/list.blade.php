@extends('layouts.app')
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
                            <a class="btn btn-primary" href="./borrow">Borrow</a>
                            <a class="btn btn-info" href="{{ route('book.show',$book->id) }}">Details</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {!!  $books->links() !!} --}}
        @endsection

