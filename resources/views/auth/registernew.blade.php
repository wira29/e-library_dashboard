@extends('layouts.auth') @section('content')
<div class="login-wrapper">
    <div class="container">
        <img
            class="img-fluid logo-dark mb-2"
            src="{{ asset('assets/back/img/logo.png') }}"
            alt="Logo"
        />
        <div class="loginbox">
            <div class="login-right">
                <div class="login-right-wrap">
                    <h1>Daftar</h1>
                    <p class="account-subtitle">
                        daftar untuk menjadi anggota e-perpus
                    </p>

                    <div class="col-12">
                        @if ($errors->any())
                        <div
                            class="alert alert-danger alert-dismissible fade show"
                        >
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li class="mt-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"
                                aria-label="Close"
                            ></button>
                        </div>
                        @endif
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf @method('POST')
                        <div class="form-group">
                            <label class="form-control-label">Nama</label>
                            <input
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                type="text"
                                value="{{ old('email') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                type="password"
                            />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label"
                                >Konfirmasi Password</label
                            >
                            <input
                                class="form-control"
                                name="password_confirmation"
                                type="password"
                            />
                        </div>
                        <div class="form-group mb-0">
                            <button
                                class="btn btn-lg btn-block btn-primary w-100"
                                type="submit"
                            >
                                Daftar
                            </button>
                        </div>
                    </form>

                    <div class="text-center dont-have">
                        Sudah memiliki akun?
                        <a href="{{ route('login') }}">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
