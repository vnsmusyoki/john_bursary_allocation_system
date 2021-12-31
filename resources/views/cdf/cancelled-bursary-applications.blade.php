@extends('school.layout')
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
                <h4 class="page-title">Applied Bursaries</h4>
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
                                Cancelled School Bursary Applications
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
                                    @if ($bursaries->count() >= 1)
                                        @foreach ($bursaries as $key => $app)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td style="text-transform:capitalize;">{{ $app->bursaryuser->name }}</td>
                                                <td style="text-transform:uppercase;">
                                                    {{ $app->bursarystudent->registration_number }}</td>

                                                <td>{{ $app->bursary_id }}</td>
                                                <td>Kshs. {{ $app->amount_applying }}</td>
                                                <td>Kshs. {{ $app->bursary_allocated_amount }}</td>
                                                <td>{{ $app->created_at->addHours(3)->format('l, d/m/Y') }}</td>
                                                <td>
                                                    @if ($app->school_status == 'school')
                                                        <span class="badge bg-primary">Submited to CDF</span>

                                                    @else
                                                        <span class="badge bg-danger">Denied</span>
                                                    @endif

                                                </td>
                                                <td>{{ $app->bursarycounty->county }}</td>
                                                <td>{{ $app->bursaryconstituency->constituency }}</td>
                                                <td><a href="{{ url('school/application-details/' . $app->id) }}"
                                                        class="btn btn-success">Details</a></td>
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
