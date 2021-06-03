@extends('layout.main')

@section('title', 'Form Ubah Data Buku')

@section('container')
<div class="container">
<div class="row">
    <div class="col-8">
        <h1 class="mt-3">Form Ubah Data Buku</h1>
        
        <form method="post" action="/book/{{ $book->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukkan Title" name="title" value="{{ $book->title }}">
            @error('title')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Masukkan Author" name="author" value="{{ $book->author }}">
            @error('author')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Masukkan Description" name="description" value="{{ $book->description }}">
            @error('description')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" placeholder="Masukkan Publisher" name="publisher" value="{{ $book->publisher }}">
            @error('publisher')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ubah Data!</button>
        </form>
     
    </div>
</div>
</div>
@endsection