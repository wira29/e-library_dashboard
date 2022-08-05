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
                    <h1>Masuk</h1>
                    <p class="account-subtitle">masuk ke halaman beranda</p>

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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                autofocus
                            />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <div class="pass-group">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control pass-input @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span class="fas fa-eye toggle-password"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 text-end">
                                    <a
                                        class="forgot-link"
                                        href="{{ route('password.request') }}"
                                        >lupa password ?</a
                                    >
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn btn-lg btn-block btn-primary w-100"
                            type="submit"
                        >
                            Masuk
                        </button>

                        <div class="text-center dont-have">
                            Belum memiliki akun?
                            <a href="{{ route('register') }}">Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
