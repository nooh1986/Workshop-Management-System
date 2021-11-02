@extends('layouts.master')


@section('title')
	كشف حساب الرواتب الشهريه
@endsection


@section('css')
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الكشوفات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('monthly') }}">/ كشف حساب الرواتب الشهريه</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/  حساب راتب الشهر {{ $month }}</span>
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
                    <h3 style="text-align: center;">جدول رواتب الموظفين الشهر {{ $month }}</h3>
                    <br>

                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الموظف</th>
                                    <th>الراتب</th>
                                    <th>الإضافي</th>
                                    <th>الغياب اليومي</th>
                                    <th>الغياب الساعي</th>
                                    <th>الدفعات</th>
                                    <th>صافي الراتب</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->salary }}</td>
                                        <td>{{ $over = \App\Models\OverTime::where('employee_id' , $employee->id)->where('year' , $year)->where('month' , $month)->sum('count') * $employee->hour }}</td>
                                        <td>{{ $day = \App\Models\Absence::where('employee_id' , $employee->id)->where('year' , $year)->where('month' , $month)->where('type' , 1)->sum('count') * $employee->day }}</td>
                                        <td>{{ $hour = \App\Models\Absence::where('employee_id' , $employee->id)->where('year' , $year)->where('month' , $month)->where('type' , 0)->sum('count') * $employee->hour }}</td>
                                        <td>{{ $payment = \App\Models\EmployeePayment::where('employee_id' , $employee->id)->where('year' , $year)->where('month' , $month)->sum('amount') }}</td>
                                        <td>{{ $total =  $employee->salary + $over - $day - $hour - $payment }}</td>
                                    </tr>
                                    <?php  $totals += $total ?>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr style="text-align: center;">
                                    <th colspan="5">إجمالي صافي الرواتب:</th>
                                    <th colspan="3">{{ $totals }}</th>
                                </tr>
                            </tfoot>               
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </div>

@endsection    