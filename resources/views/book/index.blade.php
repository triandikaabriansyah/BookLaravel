@extends('layout.main')

@section('title', 'Halaman Daftar Buku')

@section('container')
<div class="container">
<div class="row">
    <div class="col-10">
        <h1 class="mt-3">Daftar Buku</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>    
                    <th scope="col">Description</th>                
                    <th scope="col">Publisher</th>      
                    <th scope="col">Aksi</th>                              
                </tr>
            </thead>
            <tbody>
                @foreach($book as $bk)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $bk->title }}</td>
                    <td>{{ $bk->author }}</td>
                    <td>{{ $bk->description }}</td>
                    <td>{{ $bk->publisher }}</td>
                    <td>
                        <a href="book/{{ $bk->id }}/edit" class="badge badge-success">edit</a>
                        <form action="/book/{{ $bk->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="badge badge-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection