@extends('layouts.master')


@section('title')
	الموظفين
@endsection


@section('css')
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الموظفين</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض الموظفين</span>
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
                        <button class="btn ripple btn-primary" data-target="#create" data-toggle="modal">إضافه موظف</button>
                    </div>
                    <br>

                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الموظف</th>
                                    <th>الراتب</th>
                                    <th>اليوميه</th>
                                    <th>الساعيه</th>
                                    <th>الحاله</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->salary }}</td>
                                        <td>{{ $employee->day }}</td>
                                        <td>{{ $employee->hour }}</td>
                                        <td class="text-center">
                                            @if($employee->status == 1)
                                                <span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>مفعل</span>
                                            @else
                                                <span class="label text-danger d-flex"><div class="dot-label bg-danger ml-1"></div>غير مفعل</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a data-target="#edit{{ $employee->id }}" data-toggle="modal" class="btn btn-sm btn-info">
                                                <i class="las la-pen"></i>
                                            </a>
                                            <a data-target="#delete{{ $employee->id }}" data-toggle="modal" class="btn btn-sm btn-danger">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    @include('employees.edit')

                                    @include('employees.delete')

                                @endforeach
                            </tbody>       
                        </table>
                    
                    </div>
                </div>    
            </div>
        </div>
    </div>

    @include('employees.create')

@endsection


@section('js')
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection