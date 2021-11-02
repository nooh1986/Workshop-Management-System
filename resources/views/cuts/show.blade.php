@extends('layouts.master')


@section('title')
	القصات
@endsection


@section('css')
@endsection



@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">القصات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('cut.index') }}"> / عرض القصات</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ معلومات القصه </span>
            </div>
        </div>
    </div>
@endsection



@section('content')

    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    
                    <h5 style="text-align: center;"> معلومات القصه: {{ $cut->code }}</h5>
                    <br>

                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>اسم الشركه</th>
                                    <th>تاريخ الاستلام</th>
                                    <th>العدد</th>
                                    <th>كلفه القطعه</th>
                                    <th>المجموع</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align: center;">
                                    <td>{{ $cut->company->name }}</td>
                                    <td>{{ $cut->date }}</td>
                                    <td>{{ $cut->count }}</td>
                                    <td>{{ $cut->cost }}</td>
                                    <td>{{ $cut->total }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                

                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>تاريخ الإنهاء</th>
                                    <th>العدد النهائي</th>
                                    <th>الحاله</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align: center;">
                                    <td>{{ $cut->date_end }}</td>
                                    <td>{{ $cut->count_end }}</td>
                                    <td>
                                        @if($cut->status == 1)
                                            <span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>في العمل</span>
                                        @else
                                            <span class="label text-danger d-flex"><div class="dot-label bg-danger ml-1"></div>منتهية</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection



@section('js')   
@endsection