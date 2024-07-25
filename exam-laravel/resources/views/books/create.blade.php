<!-- resources/views/books/create.blade.php -->

@extends('layout')

@section('content')
<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </form>
</div>
@endsection