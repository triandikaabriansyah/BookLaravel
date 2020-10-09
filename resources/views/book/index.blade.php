@extends('layout.main')

@section('title', 'Halaman Daftar Buku')

@section('container')
<div class="container">
<div class="row">
    <div class="col-10">
        <h1 class="mt-3">Daftar Buku</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>    
                    <th scope="col">Description</th>                
                    <th scope="col">Publisher</th>      
                    <th scope="cok">Aksi</th>                              
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
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection