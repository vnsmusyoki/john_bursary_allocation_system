@extends('students.layout')
@section('title', 'Main Dashboard')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Student</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Anaysis</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-sm-12">
            <!-- Profile -->
            <div class="card bg-primary">
                <div class="card-body profile-user-box">

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-lg">

                                        @if (Auth::user()->picture == null)
                                            <img src="{{ asset('backend/images/users/avatar-2.jpg') }}" alt=""
                                                class="rounded-circle img-thumbnail">
                                        @else
                                            <img src="{{ asset('storage/profiles/' . Auth()->user()->picture) }}"
                                                style="height:100px;width:100px;border-radius:50%;">
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <h4 class="mt-1 mb-1 text-white">{{ Auth::user()->name }}</h4>
                                        <p class="font-13 text-white-50 text-uppercase">
                                            <strong>{{ $student->registration_number }}</strong>
                                        </p>

                                        <ul class="mb-0 list-inline text-light">
                                            <li class="list-inline-item me-3">
                                                <h5 class="mb-1" style="text-transform: capitalize;">
                                                    {{ $student->studentschool->school_name }}</h5>
                                                <p class="mb-0 font-13 text-white-50">
                                                    {{ $student->studentcourse->course_name }}
                                                </p>
                                            </li>
                                            <li class="list-inline-item">

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-4">
                            <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                <a href="{{ url('student/account-security') }}" class="btn btn-light">
                                    <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                </a>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row -->

                </div> <!-- end card-body/ profile-user-box-->
            </div>
            <!--end profile/ card -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-4">
            <!-- Personal-Information -->
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">Student Information</h4>


                    <hr />

                    <div class="text-start">
                        <p class="text-muted"><strong>Full Name :</strong> <span
                                class="ms-2">{{ Auth::user()->name }}</span></p>

                        <p class="text-muted"><strong>Mobile :</strong><span
                                class="ms-2">{{ $student->phone_number }}</span></p>

                        <p class="text-muted"><strong>Email :</strong> <span
                                class="ms-2">{{ Auth::user()->email }}</span></p>

                        <p class="text-muted"><strong>Home County :</strong> <span
                                class="ms-2">{{ $student->studentcounty->county }}</span></p>
                        <p class="text-muted"><strong>Constituency :</strong> <span
                                class="ms-2">{{ $student->studentconstituency->constituency }}</span></p>

                        <p class="text-muted"><strong>Languages :</strong>
                            <span class="ms-2"> English, Kiswahili </span>
                        </p>
                        <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Facebook"><i
                                    class="mdi mdi-facebook"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Twitter"><i
                                    class="mdi mdi-twitter"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Skype"><i
                                    class="mdi mdi-skype"></i></a>
                        </p>

                    </div>
                </div>
            </div>
            <!-- Personal-Information -->

            <!-- Toll free number box-->
            <div class="card text-white bg-info overflow-hidden">
                <div class="card-body">
                    <div class="toll-free-box text-center">
                        <h4> <i class="mdi mdi-deskphone"></i> Contact: {{ $student->phone_number }}</h4>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
            <!-- End Toll free number box-->

            <!-- Messages-->


        </div> <!-- end col-->

        <div class="col-xl-8">
            @if ($bursary->count() >= 1)
                @foreach ($bursary as $application)
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card tilebox-one">
                                <div class="card-body">
                                    <i class="dripicons-basket float-end text-muted"></i>
                                    <h2 class="m-b-20">{{ $application->bursary_id }}</h2>
                                    <span class="badge bg-primary"></span> <span class="text-muted">Track
                                        Application</span>
                                </div> <!-- end card-body-->
                            </div>
                            <!--end card-->
                        </div><!-- end col -->

                        <div class="col-sm-4">
                            <div class="card tilebox-one">
                                <div class="card-body">
                                    <i class="dripicons-box float-end text-muted"></i>
                                    <h2 class="m-b-20"><span>{{ $application->amount_applying }}</span>
                                    </h2>
                                    <span class="badge bg-danger"> </span> <span class="text-muted">Amount
                                        Applied</span>
                                </div> <!-- end card-body-->
                            </div>
                            <!--end card-->
                        </div><!-- end col -->

                        <div class="col-sm-4">
                            <div class="card tilebox-one">
                                <div class="card-body">
                                    <i class="dripicons-jewel float-end text-muted"></i>
                                    <h2 class="m-b-20">[ {{ $application->bursary_allocated_amount }}]</h2>
                                    <span class="badge bg-primary"> </span> <span class="text-muted">Amount
                                        Allocated</span>
                                </div> <!-- end card-body-->
                            </div>
                            <!--end card-->
                        </div><!-- end col -->

                    </div>
                    <!-- end row -->
                @endforeach
            @endif

            @if ($bursary->count() >= 1)
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">My Application</h4>

                        <div class="table-responsive">
                            <table class="table table-hover table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Track ID</th>
                                        <th>Date Applied</th>
                                        <th>Current Status</th>
                                        <th>Amount Applied</th>
                                        <th>Amount Allocated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bursary as $application)
                                        <tr>
                                            <td>{{ $application->bursary_id }}</td>
                                            <td>{{ $application->created_at->addHours(3)->format('l,d/m/Y, h:i:s a') }}
                                            </td>
                                            <td>
                                                @if ($application->bursary_status == 'applied')
                                                    <span class="badge bg-primary">Recently Applied</span>
                                                @elseif ($application->bursary_status == 'school')
                                                    <span class="badge bg-warning">School Processing</span>
                                                @elseif ($application->bursary_status == 'cdf')
                                                    <span class="badge bg-warning">CDF Reviewing</span>

                                                @elseif ($application->bursary_status == 'allocated')
                                                    <span class="badge bg-success">Allocated</span>
                                                @else
                                                    <span class="badge bg-danger">Denied</span>
                                                @endif

                                            </td>
                                            <td>Kshs. {{ $application->amount_applying }}</td>
                                            <td>

                                                @if ($application->bursary_status == 'allocated')
                                                    <span class="badge bg-success">Kshs.
                                                        {{ $bursary->bursary_allocated_amount }}</span>
                                                @else
                                                    <span class="badge bg-danger">_____</span>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div> <!-- end table responsive-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
            @endif


        </div>
        <!-- end col -->

    </div>
    <!-- end row -->
@endsection
