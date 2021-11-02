@extends('layouts.master')


@section('title')
	كشف حساب شركه 
@endsection


@section('css')
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">إداره الحسابات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('corporate') }}">/ كشف حساب شركه </a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ حساب شركه {{ $name->name }}</span>    
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
                                    <li><a href="#tab4" class="nav-link active" data-toggle="tab">قصات الشركه</a></li>
                                    <li><a href="#tab5" class="nav-link" data-toggle="tab">الدفعات</a></li>
                                    <li><a href="#tab6" class="nav-link" data-toggle="tab">صافي الحساب</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body main-content-body-right border">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab4">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>كود القصه</th>
                                                    <th>التاريخ</th>
                                                    <th>العدد</th>
                                                    <th>كلفه القطعه</th>
                                                    <th>المجموع</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cuts as $cut)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $cut->code }}</td>
                                                        <td>{{ $cut->date }}</td>
                                                        <td>{{ $cut->count }}</td>
                                                        <td>{{ $cut->cost }}</td>
                                                        <td>{{ $cut->total }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>  
                                            <tfoot>
                                                <tr style="text-align: center;">
                                                    <td colspan="4">مجموع كلفة القصات</td>
                                                    <td colspan="2">{{ $cu }}</td>
                                                </tr>
                                            </tfoot>             
                                        </table>
                                    
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab5">
                                    <div class="table-responsive border-top userlist-table">
                                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>المبلغ</th>
                                                    <th>التاريخ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($payments as $payment)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $payment->amount }}</td>
                                                        <td>{{ $payment->date }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>  
                                            <tfoot>
                                                <tr style="text-align: center;">
                                                    <td colspan="2">مجموع الدفعات </td>
                                                    <td>{{ $pay }}</td>
                                                </tr>
                                            </tfoot>             
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6">
                                    <div class="table-responsive border-top userlist-table">
                                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>مجموع كلفة القصات</th>
                                                    <th>مجموع الدفعات</th>
                                                    <th>الباقي</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $cu }}</td>
                                                    <td>{{ $pay }}</td>
                                                    <td>{{ $cu - $pay }}</td>
                                                </tr>
                                            </tbody> 
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