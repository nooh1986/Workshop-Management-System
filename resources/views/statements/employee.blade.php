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
                <h4 class="content-title mb-0 my-auto">الكشوفات</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ كشف حساب راتب موظف </span>
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
                    <form action="{{ route('employee-salaries') }}" method="post">
                    @csrf
          
                        <div class="modal-body">
          
                            <div class="row">

                                <div class="col-4">
                                    <label>اسم الموظف:</label>
                                    <select name="employee" class="form-control">
                                        <option value="" selected disabled>--- اختر ---</option>
                                        @foreach ($employees as $name => $id)
                                            <option value="{{ $id }}"> {{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('employee')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-4">
                                    <label>الشهر:</label>
                                    <select name="month" class="form-control">
                                        <option value="" selected disabled>--- اختر ---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    @error('month')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="col-4">
                                    <label>السنه:</label>
                                    <select name="year" class="form-control">
                                        <option value="" selected disabled>--- اختر ---</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                    @error('year')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>
                                
                            </div>        
                        </div>
                        
                        <button class="btn ripple btn-primary" type="submit">بحث</button>
                                     
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection    