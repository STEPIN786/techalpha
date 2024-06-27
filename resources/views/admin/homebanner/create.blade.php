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
               <form class="forms-sample" method="POST" action="{{ route('certificate.store') }}" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Student Name<span class="text-red">*</span></label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Enrollment no<span class="text-red">*</span></label>
                                <input id="name" type="text" class="form-control" name="enrollment_no" value="{{ old('enrollment_no') }}" placeholder="Enter enrollment no" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="course">Course<span class="text-red">*</span></label>
                                <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}" placeholder="Enter Course" required>
                            </div>
                        </div>

                       
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="registration_number">Duration<span class="text-red">*</span></label>
                                <input id="registration_number" type="text" class="form-control" name="duration" value="{{ old('duration') }}" placeholder="Registration Number" required>
                            </div>
                        </div>

                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="student_image">Image<span class="text-red">*</span></label>
                                <input id="student_image" type="file" class="form-control" name="student_image" required>
                            </div>
                        </div> -->

                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create</button>
                                <button type="button" class="btn btn-danger" onclick="window.location='{{ route("certificate.list") }}'">Cancel</button>
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
    $(document).ready(function() {
        // Service dropdown change event
        $('#service_id').change(function() {
            var selectedServiceId = $(this).val();
            var ajaxroute = "";

            $.ajax({
                url: ajaxroute,
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    service_id: selectedServiceId
                },
                success: function(response) {
                    $('#rate').val(response.rate);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });
</script>
@endpush
@endsection