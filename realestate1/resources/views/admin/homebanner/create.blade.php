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
               <form class="forms-sample" method="POST" action="{{ route('homebanner.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="relate_to_cat">Select Related Category for Banner<span class="text-red">*</span></label>
                            <select class="form-control" name="relate_to_cat" id="relate_to_cat">
                                @foreach ($productCategory as $cat)
                                    <option value="{{ $cat->id }}">
                                        {{ $cat->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Title<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" placeholder="Enter Title" required>
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
                            <input id="banner_image" type="file" class="form-control @error('banner_image') is-invalid @enderror" name="banner_image" value="" id="banner_image">
                            <div class="help-block with-errors" ></div>

                            @error('banner_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div id="preview" class="p-3"></div>

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
<script type="text/javascript">
    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#preview').html('<img src="'+event.target.result+'" width="300" height="300"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }

    $("#banner_image").change(function () {
        imagePreview(this);
    });
</script>
@endpush
@endsection