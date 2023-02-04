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
            @if (Route::is('dashboard'))
            <a type="button" class="btn btn-primary w-25 m-3" href="/dashboard/book/create/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg> Add New Data</a>
            @endif
            <thead>
                <tr class="bg-success text-white">
                    <th scope="col">id</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Harga</th>
                    @if (Route::is('dashboard'))
                    <th scope="col">Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @if (Route::is('dashboard'))    
                @php
                    $i = $books->firstItem();
                @endphp
            @else
                @php
                    $no = 1;
                @endphp
            @endif
                @foreach ($books as $book)
                <tr>
                   @if (Route::is('dashboard'))
                    <th>{{$i++}}</th>
                @else
                    <th>{{$no++}}</th>
                @endif
                    <!-- <th>{{$book->id}}</th> -->
                    <td>{{$book->nama}}</td>
                    <td>{{$book->pengarang}}</td>
                    <td>{{$book->harga}}</td>
                    <td>
                        @if (Route::is('dashboard'))
                        <a type="button" class="btn btn-success" href="/dashboard/book/detail/{{$book->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-fullscreen" viewBox="0 0 16 16">
                                <path d="M3 3.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z" />
                                <path d="M.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5H.5ZM1 5V2h14v3H1Zm0 1h14v8H1V6Z" />
                            </svg></a>
                        <a type="button" class="btn btn-info" href="/dashboard/book/edit/{{ $book->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                        <form action="/book/delete/{{ $book->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg></button>
                            @else

                            @endauth
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if (Route::is('dashboard'))
    <div class="mt-3">{!! $books->links() !!}</div>
    @endif
</div>
@endsection