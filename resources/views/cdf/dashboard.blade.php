@extends('cdf.layout')
@section('title', 'Main CDF Dashboard')
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
        <div class="col-xl-12 col-lg-12">

            <div class="row">
                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">

                            <h5 class="text-muted fw-normal mt-0" title="Number of Students">Total Applications
                            </h5>
                            <h3 class="mt-3 mb-3">{{ $bursaries->count() }}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">

                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Accepted</h5>
                            <h3 class="mt-3 mb-3">{{ $acceptedbursaries->count() }}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">

                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Rejected</h5>
                            <h3 class="mt-3 mb-3">{{ $deniedbursaries->count() }}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-3">
                    <div class="card widget-flat">
                        <div class="card-body">

                                <h5 class="text-muted fw-normal mt-0" title="Growth">New Applications</h5>
                                <h3 class="mt-3 mb-3">{{ $newbursaries->count() }}</h3>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

            </div> <!-- end col -->

        </div>
        <!-- end row -->
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">



                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#buttons-table-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                New Applications
                            </a>
                        </li>

                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-horizontal-preview">
                            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Name</th>
                                        <th>Registration No.</th>
                                        <th>Bursary ID</th>
                                        <th>Amount Applied</th>
                                        <th>Amount Allocated</th>
                                        <th>Date Applied</th>
                                        <th>Application Status</th>
                                        <th>County</th>
                                        <th>Constituency</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @if ($newbursaries->count() >= 1)
                                        @foreach ($newbursaries as $key => $app)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td style="text-transform:capitalize;">{{ $app->bursaryuser->name }}</td>
                                                <td style="text-transform:uppercase;">{{ $app->bursarystudent->registration_number }}</td>

                                                <td>{{ $app->bursary_id }}</td>
                                                <td>Kshs. {{ $app->amount_applying }}</td>
                                                <td>Kshs. {{ $app->bursary_allocated_amount }}</td>
                                                <td>{{ $app->created_at->addHours(3)->format('l, d/m/Y') }}</td>
                                                <td>
                                                    @if ($app->bursary_status == 'applied')
                                                        <span class="badge bg-primary">Recently Applied</span>
                                                    @elseif ($app->bursary_status == 'school')
                                                        <span class="badge bg-warning">School Processing</span>
                                                    @elseif ($app->bursary_status == 'cdf')
                                                        <span class="badge bg-warning">CDF Reviewing</span>

                                                    @elseif ($app->bursary_status == 'allocated')
                                                        <span class="badge bg-success">Allocated</span>
                                                    @else
                                                        <span class="badge bg-danger">Denied</span>
                                                    @endif

                                                </td>
                                                <td>{{ $app->bursarycounty->county }}</td>
                                                <td>{{ $app->bursaryconstituency->constituency }}</td>
                                                <td><a href="{{ url('school/application-details/'.$app->id)}}" class="btn btn-success">Details</a></td>
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
