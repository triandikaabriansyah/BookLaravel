@extends('layout.main')

@section('title', 'Detail Buku')

@section('container')
<div class="container">
<div class="row">
    <div class="col-6">
        <h1 class="mt-3">Detail Buku</h1>
        
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h6>
            <p class="card-text">{{ $book->description }}</p>
            <p class="card-text">{{ $book->publisher }}</p>

            <a href="{{ $book->id }}/edit" class="btn btn-primary">Edit</a>
            <form action="/books/{{ $book->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/books" class="card-link">Kembali</a>
        </div>
        </div>

        
    </div>
</div>
</div>
@endsection