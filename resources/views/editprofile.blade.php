@extends('layouts.master')


@section('title')
	تعديل الملف الشخصي
@endsection


@section('css')
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الإعدادات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل الملف الشخصي </span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection



@section('content')
    @include('layouts.messages_alert')
    <div class="row row-sm">
        
        <!-- Col -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <form class="form-horizontal" action="{{ route('update') }}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">اسم المستخدم</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                    @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">البريد الإلكتروني</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                    @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">كلمه السر الجديدة</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" name="password" class="form-control">
                                    @error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">تحديث الملف الشخصي</button>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
        <!-- /Col -->
    </div>

@endsection    



@section('js')
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection