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
                        <div class=""><a class="btn btn-primary" href="{{ route('product.category.add') }}">Add Category</a></div>
                    </div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Main Category</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th class="nosort text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($list))
                                    @php $i = 1; @endphp

                                    @foreach ($list as $row)
                                        @if($row->cat_id != 0)
                                            @foreach($list as $subrow)
                                                @if($row->cat_id == $subrow->id)
                                                    @php $maincat = $subrow->title; @endphp
                                                @endif
                                            @endforeach
                                        @else
                                            @php $maincat = 'Main Category'; @endphp
                                        @endif

                                        <tr>
                                            <td>{{ $i, $i++ }}</td>
                                            <td>{{ $maincat }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td class="">
                                                <img src="{{ asset('upload/productimg/thumbnail/'.$row->product_banner_image) }}" onerror="this.src='{{ asset('upload/no-image.png') }}'" height="100px" width="100px">
                                            </td>
                                            <td>
                                                <div class="table-actions text-center">
                                                    <a href="{{ route('product.category.edit', App\Http\Controllers\Controller::view_enc($row->id)) }}" >
                                                        <i class="ik ik-edit-2 f-16 mr-15 text-green"></i>
                                                    </a>
                                                    <a data-href="{{ route('product.category.delete', App\Http\Controllers\Controller::view_enc($row->id)) }}" class="delete">
                                                        <i class="ik ik-trash-2 f-16 text-red"></i>
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
        <script src="{{ asset('js/datatables.js') }}"></script>
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