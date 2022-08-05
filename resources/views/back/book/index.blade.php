@extends('layouts.back') @section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Buku</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Buku /</li>
                </ul>
            </div>
            <div class="col-auto">
                <a
                    href="{{ route('book.create') }}"
                    type="button"
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
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Sukses!</h4>
                <div class="alert-body">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif 
            @if ($errors->any())
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

    <!-- delete modal  -->
    @include('back.book.delete_modal')
    <!-- end delete modal  -->

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
        @foreach($book as $b)
        <div class="col-12 col-md-6 col-lg-3 d-flex">
            <div class="card flex-fill bg-white">
                <img
                    alt="Card Image"
                    src="{{ asset('storage/' . $b->photo) }}"
                    class="card-img-top"
                    style="height:10rem"
                />
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ $b->name }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $b->description }}</p>
                    
                </div>
                <div class="card-footer">
                    <a
                        class="card-link"
                        href="{{ route('book.edit', $b->id) }}"
                        >Edit</a
                    >
                    <a
                        class="card-link"
                        data-book="{{ $b }}"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdropDelete"
                        onclick="funDelete(this.getAttribute('data-book'));"
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
                    class="page-item {{ ($book->currentPage() == 1) ? 'disabled' : '' }} "
                >
                    <a
                        class="page-link"
                        href="{{ $book->previousPageUrl() }}"
                        tabindex="-1"
                        >Previous</a
                    >
                </li>
                @for($i = 1 ; $i <= $book->lastPage(); $i++)
                <li
                    class="page-item  {{ ($book->currentPage() == $i) ? 'active' : '' }}"
                >
                    <a
                        class="page-link"
                        href="{{ $book->path() . '?page=' . $i  }}"
                        >{{ $i }}</a
                    >
                </li>
                @endfor
                <li
                    class="page-item {{ ($book->currentPage() == $book->lastPage()) ? 'disabled' : '' }}"
                >
                    <a class="page-link" href="{{ $book->nextPageUrl() }}"
                        >Next</a
                    >
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
