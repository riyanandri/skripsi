@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Tambah Banner</h3>
                        <p class="text-subtitle text-muted">Silakan upload banner website disini.</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Banner</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Banner</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control" id="basicInput" name="title" value="{{old('title')}}" placeholder="Judul Banner">
                                </div>

                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input class="form-control" name="photo" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="condition">Kondisi <span class="text-danger">*</span></label>
                                    <fieldset class="form-group form-group-lg">
                                        <select name="condition" class="form-select" id="basicSelect">
                                            <option value="">-- Kondisi --</option>
                                            <option value="banner" {{old('condition')=='banner' ? 'selected' : ''}}>Banner</option>
                                            <option value="promo" {{old('condition')=='promo' ? 'selected' : ''}}>Promo</option>
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <fieldset class="form-group">
                                        <select name="status" class="form-select" id="basicSelect">
                                            <option value="">-- Status --</option>
                                            <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Active</option>
                                            <option value="inactive" {{old('status')=='inactive' ? 'selected' : ''}}>Inactive</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <div id="summernote" name="description" value="{{old('description')}}" placeholder="Berikan deskripsi banner"></div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
