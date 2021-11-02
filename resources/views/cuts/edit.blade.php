@extends('layouts.master')


@section('title')
	تعديل قصه
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
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل قصه</span>
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
                    <form action="{{ route('cut.update' , 'test') }}" method="post">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{ $cut->id }}">

                        <div class="row">
                            <div class="col-4">
                                <label>اسم الشركه:</label>
                                <select name="company_id" class="form-control">
                                    @foreach ($companies as $name => $id)
                                        <option value="{{ $id }}" {{ $id == $cut->company_id ? 'selected':"" }}> {{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('company_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="col-4">
                                <label>كود القصه:</label>
                                <input type="text" name="code" class="form-control" value="{{ $cut->code }}">
                                @error('code')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            

                            <div class="col-4">
                                <label>تاريخ الإستلام:</label>
                                <input type="date" name="date" class="form-control" value="{{ $cut->date }}">
                                @error('date')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <br><br>
                           
                        <div class="row">
                            <div class="col-6">
                                <label>العدد:</label>
                                <input type="number" name="count" class="form-control" value="{{ $cut->count }}">
                                @error('count')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                          
                            <div class="col-6">
                                <label>كلفه القطعه:</label>
                                <input type="number" name="cost" step="0.01" class="form-control" value="{{ $cut->cost }}">
                                @error('cost')<div class="alert alert-danger">{{ $message }}</div>@enderror
                          </div>
                        </div>
                        <br><br>     
                      
                        <button class="btn ripple btn-primary" type="submit">تعديل المعلومات</button>
                    
                    </form>
                </div>   
            </div>     
        </div>
    </div>

@endsection



@section('js')
@endsection


