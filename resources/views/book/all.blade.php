{{-- @dd($books) --}}
@extends('layouts.main')

@section('content')
<div class="container">
    <h1 align="center" class="m-5">Data Buku</h1>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
        {{ session ('success')}}
        </div>
    @endif

    <div class="card">
        <table class="table table-hover">
            <a type="button" class="btn btn-primary w-25 m-3" href="/book/create/" >Add New Data</a>
            <thead>
                <tr class="bg-dark text-white">
                <th scope="col">id</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr>
                <th>{{$book->id}}</th>
                <td>{{$book->nama}}</td>
                <td>{{$book->pengarang}}</td>
                <td>{{$book->harga}}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="/book/detail/{{$book->id}}" >Detail</a>
                    <a type="button" class="btn btn-warning"  href="/book/edit/{{ $book->id }}" >Edit</a>
                    <form action="/book/delete/{{ $book->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection