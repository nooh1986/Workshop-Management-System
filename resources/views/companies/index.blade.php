@extends('layouts.master')


@section('title')
	الشركات
@endsection


@section('css')
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الشركات</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض الشركات</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection


@section('content')

    @include('layouts.messages_alert')
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <button class="btn ripple btn-primary" data-target="#create" data-toggle="modal">إضافه شركه</button>
                    </div>
                    <br>

                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الشركه</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>
                                            <a data-target="#edit{{ $company->id }}" data-toggle="modal" class="btn btn-sm btn-info">
                                                <i class="las la-pen"></i>
                                            </a>
                                            <a data-target="#delete{{ $company->id }}" data-toggle="modal" class="btn btn-sm btn-danger">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    @include('companies.edit')

                                    @include('companies.delete')

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
   
    @include('companies.create')

@endsection


@section('js')
@endsection