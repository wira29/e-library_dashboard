@extends('layouts.back')

@section('content')
<div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="page-title">Pengaturan</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item active">Profil /</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12">
            @if (Session::get('success'))
            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                <h4 class="alert-heading">Sukses!</h4>
                <div class="alert-body">
                    {{ Session::get('success') }}
                </div>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            </div>
            @endif @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
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
    </div>

    <div class="row">
      <div class="col-xl-12 col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Profil Pengguna</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('setting.update', $user->id) }}">
                @method('PATCH')
                @csrf
              <div class="row form-group">
                <label
                  for="name"
                  class="col-sm-3 col-form-label input-label"
                  >Nama</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Nama"
                    value="{{ $user->name }}"
                  />
                </div>
              </div>
              <div class="row form-group">
                <label
                  for="email"
                  class="col-sm-3 col-form-label input-label"
                  >Email</label
                >
                <div class="col-sm-9">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    disabled
                    placeholder="Email"
                    value="{{ $user->email }}"
                  />
                  <small class="text-danger">Email tidak bisa dirubah .</small>
                </div>
              </div>
              <div class="row form-group">
                <label
                  for="name"
                  class="col-sm-3 col-form-label input-label"
                  >Password</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="password"
                    placeholder="Password"
                  />
                </div>
              </div>
              <div class="row form-group">
                <label
                  for="name"
                  class="col-sm-3 col-form-label input-label"
                  >Konfirmasi Password</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="password_confirmation"
                    placeholder="Konfirmasi Password"
                  />
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary">
                  Simpan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection