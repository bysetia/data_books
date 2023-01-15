@extends('layouts.main')

@section('content')
<div class="container">
    <h1 align="center" class="m-5">Publisher</h1>
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr class="bg-dark text-white">
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Buku</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($publishers as $publisher)
                <tr>
                <th>{{$publisher->id}}</th>
                <td>{{$publisher->nama}}</td>
                <td>{{$publisher->email}}</td>
                <td>{{$publisher->alamat}}</td>
                <td>
                    @foreach ($publisher->book as $book)
                        <ul>
                            <li>{{ $book->nama }} </li>
                        </ul>
                    @endforeach
                </td>
                <td>
                    <a type="button" class="btn btn-primary" href="/publisher/detail/{{$publisher->id}}" >Detail</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection