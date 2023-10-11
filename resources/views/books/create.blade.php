@extends('layouts.master')
@section('content')
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <label for="title"> Title:</label>
    <input id="title" type="text" name="title">

    <label for="isbn"> ISBN:</label>
    <input id="isbn" type="text" name="isbn">

    <label for="date"> Publish Date:</label>
    <input id="date" type="date" name="publish_date">

    <label for="author"> Author:</label>
    <input id="author" type="text" name="author_id">
    <input type="submit" value="Submit">
</form>
@endsection

