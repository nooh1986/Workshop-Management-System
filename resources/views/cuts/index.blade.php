@extends('layouts.master')


@section('title')
	القصات
@endsection


@section('css')
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">القصات</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض القصات</span>
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
                        <a class="btn ripple btn-primary" href="{{ route('cut.create') }}">إضافه قصه</a>
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
                                    <th>كود القصه</th>
                                    <th>تاريخ الاستلام</th>
                                    <th>العدد</th>
                                    <th>كلفه القطعه</th>
                                    <th>المجموع</th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cuts as $cut)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cut->company->name }}</td>
                                        <td><a href="{{ route('cut.show' , $cut->id) }}">{{$cut->code }}</a></td>
                                        <td>{{ $cut->date }}</td>
                                        <td>{{ $cut->count }}</td>
                                        <td>{{ $cut->cost }}</td>
                                        <td>{{ $cut->total }}</td>
                                        <td>
                                            @if($cut->status == 1)
                                                <span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>في العمل</span>
                                            @else
                                                <span class="label text-danger d-flex"><div class="dot-label bg-danger ml-1"></div>منتهية</span>
                                            @endif
                                        </td>
                                        
                                        <td>
                                            <a href="{{ route('cut.edit' , $cut->id) }}" class="btn btn-sm btn-info">
                                                <i class="las la-pen"></i>
                                            </a>
                                            <a data-target="#delete{{ $cut->id }}" data-toggle="modal" class="btn btn-sm btn-danger">
                                                <i class="las la-trash"></i>
                                            </a>
                                            <a data-target="#end{{ $cut->id }}" data-toggle="modal" class="btn btn-sm btn-primary">
                                                <i class="las la-calendar-check"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    @include('cuts.delete')

                                    @include('cuts.end')

                                @endforeach
                            </tbody>
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection


@section('js')
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection