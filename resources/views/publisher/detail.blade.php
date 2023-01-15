@extends('layouts.main')
@section('content')

<div class="container">
  <h2 align="center" class="mt-5">Detail Publisher</h2>
  <form class="mt-3">
    <div class="mb-3">
      <label class="mb-2">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{ $public->nama }}" readonly>
    </div>
    <div class="mb-3">
        <label class="mb-2">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $public->email }}" readonly>
      </div>
    <div class="mb-3">
      <label class="mb-2">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $public->alamat }}" readonly>
    </div>
    
    <button type="submit" href="/book" class="btn btn-secondary">Close</button>
  </form>
</div>

@endsection
