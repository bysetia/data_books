@extends('layouts.main')
@section('content')
<div class="container">
    <h2 align="center" class="mt-5">Add Book Data</h2>
    <form class="mt-3" method="post" action="/book/update/ {{ $book->id }}">
        @csrf
      <div class="mb-3">
        <label class="mb-2">Nama Buku</label>
        <input type="text" class="form-control" id="nama" name="nama" required value="{{ old('nama', $book->nama)}}">
      </div>
      <div class="mb-3">
          <label class="mb-2">Pengarang</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" required value="{{ old('pengarang', $book->pengarang)}}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <select class="form-select" name="publisher_id" id="">
                @foreach ($publisher as $publish)
                @if (old('publisher_id', $book->publisher_id == $publish->id))
                    <option name="publisher_id" value="{{ $publish->id}}" selected>{{ $publish->nama }}</option>
                @else
                    <option name="publisher_id" value="{{ $publish->id}}">{{ $publish->nama}}</option>
                @endif
                @endforeach
            </select>
          </div>
      <div class="mb-3">
        <label class="mb-2">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" required value="{{ old('harga', $book->harga)}}">
      </div>
      <div class="mb-3">
        <label class="mb-2">Release</label>
        <input type="date" class="form-control" id="release" name="release" required value="{{ old('release', $book->release)}}">
      </div>
      
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
@endsection