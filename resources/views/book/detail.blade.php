   @extends('layouts.main')
    @section('content')
    
    <div class="container">
      <h2 align="center" class="mt-5">Detail Buku</h2>
      <form class="mt-3">
        <div class="mb-3">
          <label class="mb-2">Nama Buku</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $book->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label class="mb-2">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $book->pengarang }}" readonly>
          </div>
        <div class="mb-3">
          <label class="mb-2">Publisher</label>
          <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher->nama }}" readonly>
        </div>
        <div class="mb-3">
          <label class="mb-2">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga" value="{{ $book->harga }}" readonly>
        </div>
        <div class="mb-3">
          <label class="mb-2">Release</label>
          <input type="text" class="form-control" id="release" name="release" value="{{ $book->release }}" readonly>
        </div>
        
        <button type="submit" href="/book" class="btn btn-secondary">Close</button>
      </form>
    </div>
    
    @endsection
  