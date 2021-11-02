@extends('layouts.master')


@section('title')
	إضافه قصه
@endsection


@section('css')
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">القصات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('cut.index') }}">/القصات</a></span>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ إضافه قصه</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection



@section('content')

    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('cut.store') }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-4">
                                <label>اسم الشركه:</label>
                                <select name="company_id" class="form-control">
                                    <option value="" selected disabled>--- اختر ---</option>
                                    @foreach ($companies as $name => $id)
                                        <option value="{{ $id }}"> {{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('company_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="col-4">
                                <label>كود القصه:</label>
                                <input type="text" name="code" class="form-control">
                                @error('code')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            

                            <div class="col-4">
                                <label>تاريخ الإستلام:</label>
                                <input type="date" name="date" class="form-control">
                                @error('date')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <br><br>
                           
                        <div class="row">
                            <div class="col-6">
                                <label>العدد:</label>
                                <input type="number" name="count" class="form-control">
                                @error('count')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                          
                            <div class="col-6">
                                <label>كلفه القطعه:</label>
                                <input type="number" name="cost" step="0.01" class="form-control">
                                @error('cost')<div class="alert alert-danger">{{ $message }}</div>@enderror
                          </div>
                        </div>
                        <br><br>     
                      
                        <button class="btn ripple btn-primary" type="submit">حفظ المعلومات</button>
                    
                    </form>
                </div>   
            </div>     
        </div>
    </div>

@endsection


@section('js')
@endsection











