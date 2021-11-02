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
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ كشف حساب شركه  </span>
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
                    <form action="{{ route('corporate-account') }}" method="post">
                    @csrf
          
                        <div class="modal-body">
          
                            <div class="row">

                                <div class="col-4">
                                    <label>اسم الشركه:</label>
                                    <select name="company" class="form-control">
                                        <option value="" selected disabled>--- اختر ---</option>
                                        @foreach ($companies as $name => $id)
                                            <option value="{{ $id }}"> {{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('company')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-4">
                                    <label>من تاريخ:</label>
                                    <input type="date" name="from" class="form-control" >
                                </div>
                                
                                <div class="col-4">
                                    <label>من تاريخ:</label>
                                    <input type="date" name="to" class="form-control">
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