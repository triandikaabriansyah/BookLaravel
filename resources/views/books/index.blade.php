@extends('layout.main')

@section('title', 'Halaman Detail Buku')

@section('container')
<div class="container">
<div class="row">
    <div class="col-6">
        <h1 class="mt-3">Detail Buku</h1>

        <a href="/books/create" class="btn btn-primary my-3">Tambah Data Buku</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <ul class="list-group">
            @foreach($books as $book)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $book->title }}
                <a href="/books/{{ $book->id }}" class="badge badge-info">detail</a>
            </li>
            @endforeach
        </ul>

        
    </div>
</div>
</div>
@endsection