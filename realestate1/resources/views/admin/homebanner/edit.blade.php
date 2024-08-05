@extends('layouts.main')
@section('title', $page_title)
@section('content')
<div class="container-fluid">
   <div class="page-header">
      <div class="row align-items-end">
         <div class="col-lg-8">
            <div class="page-header-title">
               <i class="ik ik-edit bg-blue"></i>
               <div class="d-inline">
                  <h5>{{ $page_title }}</h5>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="{{ route('dashboard') }}"><i class="ik ik-home"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a>{{ $page_title }}</a></li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h3>{{ $page_title }}</h3>
            </div>
            <div class="card-body">
               <form class="forms-sample" method="POST" action="{{ route('homebanner.update') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="cat_id">Product Category<span class="text-red">*</span></label>
                            <select class="form-control" name="cat_id" id="cat_id">
                                @foreach ($productCategory as $cat)
                                    <option value="{{ $cat->id }}" {{ ($banner->relate_to_cat == $cat->id) ? 'selected' : '' }}>
                                        {{ $cat->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Title<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="@if(isset($banner)) {{ $banner->title }} @endif" placeholder="Enter Title" required>
                            <input type="hidden" name="id" value="{{ App\Http\Controllers\Controller::view_enc($banner->id) }}">
                            <div class="help-block with-errors"></div>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="banner_image">Banner Image<span class="text-red">*</span></label>
                            <input id="banner_image" type="file" class="form-control @error('banner_image') is-invalid @enderror" name="banner_image" value="">
                            <div class="help-block with-errors" ></div>

                            @error('banner_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if(isset($banner->banner_image))
                            <div class="mt-3 mb-3">
                                <p><b>Old Banner Image &#x21b4;</b></p>
                                <img src="{{ asset('upload/homebannerimg/thumbnail/'.$banner->banner_image) }}">
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-danger" onclick="window.location='{{ route("homebanner.list") }}'">Cancel</button>
                        </div>
                    </div>
                </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- push external js -->
@push('script')
<script src="{{ asset('js/form-components.js') }}"></script>
@endpush
@endsection