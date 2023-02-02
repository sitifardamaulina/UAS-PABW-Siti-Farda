@extends('admin.index')
@section('container')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form action="/dashboard/course/{{ $Course['id'] }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @method('put')
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $Course['title'] }}" id="text-input" name="title" placeholder="Input Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Price</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $Course['price'] }}" id="text-input" name="price" placeholder="Input Price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Rating</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $Course['rating'] }}" id="text-input" name="rating" placeholder="Input Rating" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Teacher</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $Course['teacher'] }}" id="text-input" name="teacher" placeholder="Input Teacher" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Job</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $Course['job'] }}" id="text-input" name="job" placeholder="Input Job" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Video</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $Course['video'] }}" id="text-input" name="video" placeholder="Input Video" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Upload Images Teacher</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="mb-3">
                                                <input class="form-control" name="image" type="file" id="formFile" value="{{ $Course['images'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Upload Images Course</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="mb-3">
                                                <input class="form-control" name="image_bg" type="file" id="formFile" value="{{ $Course['images'] }}">
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection