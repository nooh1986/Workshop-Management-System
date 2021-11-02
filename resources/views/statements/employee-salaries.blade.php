@extends('layouts.master')


@section('title')
	كشف حساب راتب موظف 
@endsection


@section('css')
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الكشوفات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('employee') }}">/ كشف حساب راتب موظف </a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ راتب الموظف {{ $name->name }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection


@section('content')

    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-primary tabs-style-2">
                        <div class=" tab-menu-heading">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs main-nav-line">
                                    <li><a href="#tab4" class="nav-link active" data-toggle="tab">الإضافي</a></li>
                                    <li><a href="#tab5" class="nav-link" data-toggle="tab">الغياب</a></li>
                                    <li><a href="#tab6" class="nav-link" data-toggle="tab">الدفعات</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body main-content-body-right border">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab4">
                                    <div class="table-responsive border-top userlist-table">
                                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>الشهر</th>
                                                    <th>تاريخ الإضافي</th>
                                                    <th>عدد الساعات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($overtimes as $overtime)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $overtime->month }}</td>
                                                        <td>{{ $overtime->date }}</td>
                                                        <td>{{ $overtime->count }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>       
                                        </table>
                                    
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab5">
                                    <div class="table-responsive border-top userlist-table">
                                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>الشهر</th>
                                                    <th>تاريخ الغياب</th>
                                                    <th>العدد</th>
                                                    <th>نوع الغياب</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($absences as $absence)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $absence->month }}</td>
                                                        <td>{{ $absence->date }}</td>
                                                        <td>{{ $absence->count }}</td>
                                                        <td>{{ ($absence->type == 1 ? 'يومي' : 'ساعي') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>       
                                        </table>
                                    
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6">
                                    <div class="table-responsive border-top userlist-table">
                                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>الشهر</th>
                                                    <th>تاريخ الدفعه</th>
                                                    <th>المبلغ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($payments as $payment)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $payment->month }}</td>
                                                        <td>{{ $payment->date }}</td>
                                                        <td>{{ $payment->amount }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody> 
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" style="text-align: center;">مجموع الدفعات</td>
                                                    <td>{{ $total }}</td>
                                                </tr>    
                                            </tfoot>          
                                        </table>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>            

@endsection    