@extends('admin.layout')
@section('title', 'Main Dashboard')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">

                        <a href="{{ url('admin/all-events') }}" class="btn btn-custom-colored ms-2">
                            Add Event
                        </a>

                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->








@endsection
