@extends('layouts.master')


@section('title')
	دفعات الشركات
@endsection


@section('css')
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">دفعات الشركات</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض دفعات الشركات </span>
            </div>
        </div>
    </div>
@endsection


@section('content')

@include('layouts.messages_alert')
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <button class="btn ripple btn-primary" data-target="#create" data-toggle="modal">إضافه دفعه</button>
                    </div>
                    <br>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الشركه</th>
                                    <th>المبلغ</th>
                                    <th>التاريخ</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $payment->company->name }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->date }}</td>
                                    <td>
                                        <a data-target="#edit{{ $payment->id }}" data-toggle="modal" class="btn btn-sm btn-info">
                                            <i class="las la-pen"></i>
                                        </a>
                                        <a data-target="#delete{{ $payment->id }}" data-toggle="modal" class="btn btn-sm btn-danger">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                    @include('payments.edit')

                                    @include('payments.delete')
                                    
                                @endforeach
                            </tbody>
                        </table>        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('payments.create')
    
@endsection



@section('js')
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection

