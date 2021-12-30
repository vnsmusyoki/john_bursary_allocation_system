@extends('students.layout')
@section('title', 'Apply Loan Here')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Student</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bursary</a></li>
                        <li class="breadcrumb-item active">Application</li>
                    </ol>
                </div>
                <h4 class="page-title">Apply for a new bursary</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                @livewire('student.bursary-application')
               
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection
