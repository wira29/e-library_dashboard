@extends('layouts.back') @section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Kategori</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Kategori /</li>
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
                <a
                    class="btn btn-primary filter-btn"
                    href="javascript:void(0);"
                    id="filter_search"
                >
                    <i class="fas fa-filter"></i>
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

    <!-- add modal  -->
    @include('back.category.add_modal')
    <!-- end add modal  -->

    <div id="filter_inputs" class="card filter-card">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($category as $b)
        <div class="col-12 col-md-6 col-lg-4 d-flex">
            <div class="card flex-fill bg-white">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ $b->category }}</h5>
                </div>
                <div class="card-body">
                    <a
                        class="card-link btn-edit"
                        onClick="edit(this.getAttribute('data-category'));"
                        data-category="{{ $b }}"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdropEdit"
                        href="#"
                        >Edit</a
                    >
                    <a
                        class="card-link"
                        onClick="funDelete(this.getAttribute('data-category'));"
                        data-category="{{ $b }}"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdropDelete"
                        href="#"
                        >Delete</a
                    >
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12 d-flex flex-row justify-content-center">
            <ul class="pagination mb-4">
                <li
                    class="page-item {{ ($category->currentPage() == 1) ? 'disabled' : '' }} "
                >
                    <a
                        class="page-link"
                        href="{{ $category->previousPageUrl() }}"
                        tabindex="-1"
                        >Previous</a
                    >
                </li>
                @for($i = 1 ; $i <= $category->lastPage(); $i++)
                <li
                    class="page-item  {{ ($category->currentPage() == $i) ? 'active' : '' }}"
                >
                    <a
                        class="page-link"
                        href="{{ $category->path() . '?page=' . $i  }}"
                        >{{ $i }}</a
                    >
                </li>
                @endfor
                <li
                    class="page-item {{ ($category->currentPage() == $category->lastPage()) ? 'disabled' : '' }}"
                >
                    <a class="page-link" href="{{ $category->nextPageUrl() }}"
                        >Next</a
                    >
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- edit modal  -->
@include('back.category.edit_modal')
<!-- end edit modal  -->

<!-- delete modal  -->
@include('back.category.delete_modal')
<!-- end delete modal  -->

@endsection
