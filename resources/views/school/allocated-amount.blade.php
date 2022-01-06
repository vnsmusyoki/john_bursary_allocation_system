@extends('school.layout')
@section('title', 'Bursary Allocated Amount')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-primary ms-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">



                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#buttons-table-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                               Computed Bursaries
                            </a>
                        </li>
                        <li class="nav-item">

                        </li>

                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-horizontal-preview">
                           
                            <br>
                            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Name</th>
                                        <th>Registration No.</th>
                                        <th>Constituency</th>
                                        <th>Bursary ID</th>
                                        <th>Amount Applied</th>
                                        <th>Points Earned</th>
                                        <th>Amount Allocated</th>
                                        <th>School</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @if ($acceptedbursaries->count() >= 1)
                                        @foreach ($acceptedbursaries as $key => $app)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td style="text-transform:capitalize;">{{ $app->bursaryuser->name }}</td>
                                                <td style="text-transform:uppercase;">
                                                    {{ $app->bursarystudent->registration_number }}</td>
                                                    <td style="text-transform:capitalize;">{{ $app->bursaryconstituency->constituency }}</td>
                                                <td>{{ $app->bursary_id }}</td>
                                                <td>Kshs. {{ $app->amount_applying }}</td>
                                                <td>{{ $app->points_earned }}</td>
                                                <td>Kshs. {{ $app->bursary_allocated_amount }}</td>
                                                <td>{{ $app->bursaryschool->school_name }}</td>

                                            </tr>
                                        @endforeach

                                    @endif
                                </tbody>
                            </table>
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->


@endsection
