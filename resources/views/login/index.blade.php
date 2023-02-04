@extends('layouts.main')
@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="mt-5 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card bg-white shadow-lg">
                            <div class="card-body p-5">
                                <form class="mb-3 mt-md-4" action="/login/authenticate" method="POST">
                                    @csrf
                                    <h2 class="fw-bold mb-5 text-uppercase text-center">LOGIN</h2>
                                    <div class="mb-3">
                                        <label for="email" class="form-label ">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label ">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="*******">
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn mt-3 w-100 btn-primary" type="submit">Login</button>
                                        <p class="small text-end mt-4"><a class="text-primary" href="/register/">Belum punya akun?</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection