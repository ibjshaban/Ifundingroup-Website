@extends('dashboard.layout.master')

@section('pageTitle','Home page')

@section('content')
    <form method="post" action="{{ route('careers.update', $career->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Careers page</h4>
                    </div>

                    <div class="card-body">

                        <h2 class="section-title">Career</h2>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="title" value="{{ $career->title }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="form-group col-sm-12 col-md-7">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content"
                                          rows="3">{{ $career->content }}</textarea>
                            </div>
                        </div>

                        {{-- <h2 class="section-title">Customer testimonials</h2>
                         <div class="form-group row mb-4">
                             <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                             <div class="col-sm-12 col-md-7">
                                 <input type="text" class="form-control" name="test_name" value="{{ old('test_name') }}">
                             </div>
                         </div>

                         <div class="form-group row mb-4">
                             <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job name</label>
                             <div class="col-sm-12 col-md-7">
                                 <input type="text" class="form-control" name="test_job" value="{{ old('test_job') }}">
                             </div>
                         </div>

                         <div class="form-group row mb-4">
                             <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Paragraph</label>
                             <div class="form-group col-sm-12 col-md-7">
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                           name="test_graph">{{ old('test_graph') }}</textarea>
                             </div>
                         </div>--}}

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary">Edit</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
