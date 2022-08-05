@extends('layouts.back') @section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Buku</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Buku / Tambah</li>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="basic-pills-wizard" class="twitter-bs-wizard">
                        <form
                            method="POST"
                            action="{{ route('book.store') }}"
                            enctype="multipart/form-data"
                        >
                            @method('POST') @csrf
                            <ul class="twitter-bs-wizard-nav">
                                <li class="nav-item">
                                    <a
                                        href="#detail-buku"
                                        class="nav-link"
                                        data-toggle="tab"
                                    >
                                        <div
                                            class="step-icon"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Buku"
                                        >
                                            <i class="fe fe-grid"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        href="#harga"
                                        class="nav-link"
                                        data-toggle="tab"
                                    >
                                        <div
                                            class="step-icon"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Detail Buku"
                                        >
                                            <i class="fe fe-book"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        href="#file-pendukung"
                                        class="nav-link"
                                        data-toggle="tab"
                                    >
                                        <div
                                            class="step-icon"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="File Pendukung"
                                        >
                                            <i class="fe fe-file-text"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div
                                class="tab-content twitter-bs-wizard-tab-content"
                            >
                                <div class="tab-pane" id="detail-buku">
                                    <div class="mb-4">
                                        <h5>Buku</h5>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"
                                            >Nama Buku</label
                                        >
                                        <div class="col-lg-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                value="{{ old('name') }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"
                                            >Penulis</label
                                        >
                                        <div class="col-lg-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="author"
                                                value="{{ old('author') }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-lg-3 col-form-label"
                                            >Jumlah Halaman</label
                                        >
                                        <div class="col-lg-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="pages"
                                                value="{{
                                                    old('pages')
                                                }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-lg-3 col-form-label"
                                            >Bahasa</label
                                        >
                                        <div class="col-lg-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="language"
                                                value="{{
                                                    old('language')
                                                }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"
                                            >Deskripsi</label
                                        >
                                        <div class="col-lg-9">
                                            <textarea
                                                type="text"
                                                class="form-control"
                                                rows="10"
                                                name="description"
                                                value="{{ old('description') }}"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <ul
                                        class="pager wizard twitter-bs-wizard-pager-link"
                                    >
                                        <li class="next">
                                            <a
                                                href="javascript: void(0);"
                                                class="btn btn-primary"
                                                onclick="nextTab()"
                                                >Next
                                                <i
                                                    class="bx bx-chevron-right ms-1"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="harga">
                                    <div>
                                        <div class="mb-4">
                                            <h5>Detail Buku</h5>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-lg-3 col-form-label"
                                                >Penerbit</label
                                            >
                                            <div class="col-lg-9">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="publisher"
                                                    value="{{
                                                        old('publisher')
                                                    }}"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-lg-3 col-form-label"
                                                >Tanggal Terbit</label
                                            >
                                            <div class="col-lg-9">
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    name="published"
                                                    value="{{
                                                        old('published')
                                                    }}"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-lg-3 col-form-label"
                                                >Kategori</label
                                            >
                                            <div class="col-lg-9">
                                                <select
                                                    id="select"
                                                    name="category[]"
                                                    class="form-control tagging"
                                                    multiple="multiple"
                                                >
                                                    @foreach($category as $c)
                                                    <option
                                                        value="{{ $c->id }}"
                                                    >
                                                        {{ $c->category }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-lg-3 col-form-label"
                                                >Harga Sewa Buku / hari</label
                                            >
                                            <div class="col-lg-9">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="price"
                                                    value="{{ old('price') }}"
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-lg-3 col-form-label"
                                                >Sinopsis</label
                                            >
                                            <div class="col-lg-9">
                                                <textarea
                                                    type="text"
                                                    class="form-control"
                                                    rows="10"
                                                    name="synopsis"
                                                    value="{{
                                                        old('synopsis')
                                                    }}"
                                                ></textarea>
                                            </div>
                                        </div>
                                        <ul
                                            class="pager wizard twitter-bs-wizard-pager-link"
                                        >
                                            <li class="previous">
                                                <a
                                                    href="javascript: void(0);"
                                                    class="btn btn-primary"
                                                    onclick="nextTab()"
                                                    ><i
                                                        class="bx bx-chevron-left me-1"
                                                    ></i>
                                                    Previous</a
                                                >
                                            </li>
                                            <li class="next">
                                                <a
                                                    href="javascript: void(0);"
                                                    class="btn btn-primary"
                                                    onclick="nextTab()"
                                                    >Next
                                                    <i
                                                        class="bx bx-chevron-right ms-1"
                                                    ></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane" id="file-pendukung">
                                    <div>
                                        <div class="mb-4">
                                            <h5>File Pendukung</h5>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-lg-3 col-form-label"
                                                >Gambar Buku</label
                                            >
                                            <div class="col-lg-9">
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    name="photo"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-lg-3 col-form-label"
                                                >File Buku</label
                                            >
                                            <div class="col-lg-9">
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    name="file"
                                                />
                                            </div>
                                        </div>
                                        <ul
                                            class="pager wizard twitter-bs-wizard-pager-link"
                                        >
                                            <li class="previous">
                                                <a
                                                    href="javascript: void(0);"
                                                    class="btn btn-primary"
                                                    onclick="nextTab()"
                                                    ><i
                                                        class="bx bx-chevron-left me-1"
                                                    ></i>
                                                    Previous</a
                                                >
                                            </li>
                                            <li class="float-end">
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                >
                                                    Save Changes
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
