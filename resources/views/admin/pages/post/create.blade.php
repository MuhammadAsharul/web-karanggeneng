@extends('admin.layouts.main')
@section('title', 'Admin | Tambah Post')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Post</h3>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Post
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
                    <form class="form form-vertical" action="{{ route('post.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="judul">Judul Post</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Input with icon left"
                                                name="judul" id="judul" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-book"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group has-icon-left">
                                        <label for="kategori">Kategori Post</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select class="form-select" id="basicSelect" name="category_id">
                                                    <option value="" holder>Pilih Kategori</option>
                                                    @foreach ($category as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Konten Post</label>
                                        <div class="position-relative">
                                            <textarea class="form-control" id="content" name="content" rows="3"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar" class="form-label">Thumbnail</label>
                                        <input class="form-control " id="gambar" type="file" name="gambar" />
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
