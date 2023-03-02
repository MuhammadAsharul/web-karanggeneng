@extends('admin.layouts.main')
@section('title', 'Admin | Tambah Tag')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Tag</h3>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tag
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible show fade">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form form-vertical" action="{{ route('tag.store') }}" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="name">Nama Tag</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Input with icon left"
                                                name="name" id="name" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end mt-2">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
