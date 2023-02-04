@extends('layouts.main')
@section('content')

<div class="d-flex justify-content-center align-items-center m-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-white shadow-lg">
                    <div class="card-body p-5">
                        <form class="mb-3" action='/register/create' method='post'>
                            @csrf
                            <h2 class="fw-bold mb-2 text-uppercase text-center">REGISTER</h2>
                            <div class="mb-3">
                                <label for="name" class="form-label ">Username</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="username">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="*******">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary mt-3 w-auto" type="submit">Daftar</button>
                                <p class="small text-end mt-4"><a class="text-primary" href="/login/">Sudah punya akun?</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection