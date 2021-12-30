@extends('students.layout')
@section('title', 'Main Dashboard')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bursary </a></li>
                        <li class="breadcrumb-item active">Applications</li>
                    </ol>
                </div>
                <h4 class="page-title">Denied Bursaries</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <p class="text-muted font-14">
                        All Bursaries Applied
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#buttons-table-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                My Bursary Applications
                            </a>
                        </li>

                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-horizontal-preview">
                            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
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
                                    @if ($bursary->count() >= 1)
                                        @foreach ($bursary as $key => $app)
                                            <tr>
                                                <td>{{ ++$key }}</td>
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
                                                <td><a href="{{ url('student/application-details/'.$app->id)}}" class="btn btn-success">Details</a></td>
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
