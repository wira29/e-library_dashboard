@extends('layouts.back')
@section('content')
<div class="content container-fluid">

    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Beranda</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item active">Beranda /</li>
    </ul>
    </div>
    <div class="col-auto">
        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary me-1">
        <i class="fas fa-plus"></i>
        </a>
        <a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
        <i class="fas fa-filter"></i>
        </a>
        </div>
    </div>
    </div>
</div>
@endsection