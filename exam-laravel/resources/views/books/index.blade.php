<!-- resources/views/books/index.blade.php -->

@extends('layout')

@section('content')
<div class="container-fluid vh-100 d-flex flex-column">
    <h1><i class="fas fa-book"></i> Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add Book</a>
    <div class="table-responsive flex-grow-1">
        <table class="table table-striped w-100 h-100">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection