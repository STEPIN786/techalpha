@extends('layouts.main')
@section('title', 'Contact')
@section('content')

    <!-- push external head elements to head -->

    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Contact Inquiry') }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="JavaScript:void(0)">Contact Inquiry</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3>{{ __('Inquiry List') }}</h3>
                    </div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('No.') }}</th>
                                    <th>{{ __('First Name') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    @if (false) <th>{{ __('Status') }}</th> @endif
                                    <th class="nosort text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 1;
                                ?>

                                @foreach ($list as $row)
                                    <tr>
                                        <td>{{ $i, $i++ }}</td>
                                        <td>{{ $row->fname }}</td>
                                        <td>{{ $row->email }}</td>
                                        @if (false) <td>{{ $row->status }}</td> @endif
                                        <td class="">
                                            <div class="table-actions text-center">
                                                <a href="#detail{{ $row->id }}" data-toggle="modal" data-target="#detail{{ $row->id }}">
                                                    <i class="ik ik-eye text-blue"></i>
                                                </a>
                                                <a title="delete this" data-href="{{ route('contact-delete', App\Http\Controllers\Controller::view_enc($row->id)) }}" class="delete">
                                                    <i class="ik ik-trash-2 text-red"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- details model -->

    @foreach ($list as $row)
    <div class="modal fade edit-layout-modal" id="detail{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLayoutItemLabel">{{ $row->fname }}'s inquiry detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="lead"><b>First Name : </b> {{ $row->fname }}</p><hr>
                    <p class="lead"><b>Email : </b> {{ $row->email }}</p><hr>

                    <div class="jumbotron pt-30 pb-30 mt-30">
                        <h2 class="mt-0">{{ __('Message')}}</h2>
                        <p class="lead">{{ $row->message }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close')}}</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- push external js -->

    @push('script')
        <script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
        <script src="{{ asset('plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('js/datatables.js') }}"></script>
        <script src="{{ asset('js/layouts.js') }}"></script>
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