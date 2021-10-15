@extends('admin.layout')
@section('title', 'Register New Student')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">

                        <a href="{{ route('managestudents.index') }}" class="btn event-delete ms-2">
                            Cancel add
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12"></div>
        <div class="col-lg-1- col-md-10 col-xs-12 col-sm-12">
            @livewire ('admin.student-register-account')
            
        </div>
        <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12"></div>
    </div>



@endsection
