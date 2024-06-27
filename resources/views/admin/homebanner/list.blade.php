@extends('layouts.main')
@section('title', $page_title)
@section('content')

<!-- push external head elements to head -->
@push('head')
    <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
@endpush

    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                </button>
            </div>
        @endif
    </div>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ $page_title }}</h5>
                            <span>{{ $page_title }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="JavaScript:void(0)">{{ $page_title }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3>{{ $page_title }}</h3>
                    </div>
                    <div class="card-body">
                        <table id="data_table3" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Student</th>
                                    <th>Course</th>
                                    <th>Link</th>
                                    <th class="nosort text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($list))
                                    @php $i = 1; @endphp
                                    @foreach ($list as $row)
                                        <tr>
                                            <td>{{ $i, $i++ }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->course }}</td>
                                            <td><a href="{{ $row->link }}" target="_blank" style="color:blue;">Open Link</a></td>
                                            <td>
                                                <div class="table-actions text-center">
                                                    <a href="{{ route('certificate.qr', App\Http\Controllers\Controller::view_enc($row->id)) }}" title="QR Download">
                                                        <i class="ik ik-download f-19 mr-15 text-green"></i>
                                                    </a>
                                                    <a href="{{ route('certificate.view', App\Http\Controllers\Controller::view_enc($row->id)) }}" title="Open">
                                                        <i class="ik ik-eye f-19 mr-15"></i>
                                                    </a>
                                                    <a href="{{ route('certificate.edit', App\Http\Controllers\Controller::view_enc($row->id)) }}" title="Edit">
                                                        <i class="ik ik-edit-2 f-19 mr-15 text-green"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('js/datatables3.js') }}"></script>
        <script src="{{ asset('js/form-components.js') }}"></script>
        <script src="{{ asset('js/confirm/jquery-confirm.min.js') }}"></script>
        <script type="text/javascript">
            $("body").on( "click", ".delete", function() {
                var link = $(this).attr("data-href");
                $.confirm({
                icon: 'fa fa-trash',
                title: 'Confirm!!',
                content: 'Are You Sure to Delete this Record?',
                draggable: true,
                buttons: {
                    confirm: function () {
                        window.location.href = link;
                    },
                    cancel: function () {
                    },
                }
            });
            });
        </script>
    @endpush
@endsection