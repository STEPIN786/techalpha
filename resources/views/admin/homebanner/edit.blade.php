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
               <form class="forms-sample" method="POST" action="{{ route('certificate.update') }}" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Student Name<span class="text-red">*</span></label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ @$data->name }}" placeholder="Enter Name" required>
                                <input type="hidden" name="id" value="{{ @$data->id }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="course">Course<span class="text-red">*</span></label>
                                <input id="course" type="text" class="form-control" name="course" value="{{ @$data->course }}" placeholder="Enter Course" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="center">Center<span class="text-red">*</span></label>
                                <input id="center" type="text" class="form-control" name="center" value="{{ @$data->center }}" placeholder="Enter Center" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="complition_date">Complition Date<span class="text-red">*</span></label>
                                <input id="complition_date" type="date" class="form-control" max="{{ date('Y-m-d') }}" value="{{ isset($data->complition_date) ? \Carbon\Carbon::parse($data->complition_date)->toDateString() : '' }}" name="complition_date" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="registration_number">Registration Number<span class="text-red">*</span></label>
                                <input id="registration_number" type="text" class="form-control" name="registration_number" value="{{ @$data->registration_number }}" placeholder="Registration Number" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="student_image">Image</label>
                                <input id="student_image" type="file" class="form-control" name="student_image">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
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

@endpush
@endsection