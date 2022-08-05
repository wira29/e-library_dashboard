@extends('layouts.back')
 @section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Data Admin</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Data Admin /</li>
                </ul>
            </div>
            <div class="col-auto">
                <a
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                    class="btn btn-primary me-1"
                >
                    <i class="fas fa-plus"></i>
                </a>
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

    @include('back.admin.add')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admin as $a)
                                <tr>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->email }}</td>
                                    <td>{{ ($a->email_verified_at) ? 'aktif' : 'tidak aktif' }}</td>
                                    <td>
                                        <a href="" class="mx-3" data-admin="{{ $a }}" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropEdit" onClick="edit(this.getAttribute('data-admin'))"><i class="fe fe-edit-2"></i></a>
                                        <a href="" data-admin="{{ $a }}" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropDelete" onClick="funDelete(this.getAttribute('data-admin'))"><i class="fe fe-trash-2"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('back.admin.edit')
    @include('back.admin.delete')

</div>
@endsection
