@extends('cdf.layout')
@section('title', 'Application Details')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bursary</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Application</a></li>
                        <li class="breadcrumb-item active"> Details</li>
                    </ol>
                </div>
                <h4 class="page-title">{{ $bursary->bursaryuser->name }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product title -->
                            <h3 class="mt-0">Attachments<a href="javascript: void(0);" class="text-muted"><i
                                        class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                            <div class="">

                                <p><a href="{{ asset('storage/feestructure/' . $bursary->fee_structure) }}"
                                        download="fee-structure-{{ $bursary->bursaryuser->name }}"
                                        class="btn btn-danger btn-block">Download Fee Structure</a></p>

                                <p> <a href="{{ asset('storage/schoolperfomance/' . $bursary->school_perfomance) }}"
                                        download="school-perfomance-{{ $bursary->bursaryuser->name }}"
                                        class="btn btn-success btn-block">Download School Results</a></p>
                                @if ($bursary->special_needs_attachment != null)
                                    <p> <a href="{{ asset('storage/specialneeds/' . $bursary->special_needs_attachment) }}"
                                            download="special-needs-attachment-{{ $bursary->bursaryuser->name }}"
                                            class="btn btn-warning btn-block">Download Special Needs Attachment</a></p>
                                @endif
                                @if ($bursary->relevant_attachment != null)
                                    <p> <a href="{{ asset('storage/additionaldocuments/' . $bursary->relevant_attachment) }}"
                                            download="additional-documents-{{ $bursary->bursaryuser->name }}"
                                            class="btn btn-primary btn-block">Download Additional Attachment</a></p>
                                @endif
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-7">
                            <form class="ps-lg-4">
                                <!-- Product title -->
                                <h3 class="mt-0">Student details<a href="javascript: void(0);"
                                        class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                <p class="mb-1">Date Applied:
                                    {{ $bursary->created_at->addHours(3)->format('l,d/m/Y h:i:s a') }}</p>
                                <div class="text-start">
                                    <p class="text-muted"><strong>Full Name :</strong> <span
                                            class="ms-2">{{ $student->studentuser->name }}</span></p>

                                    <p class="text-muted"><strong>Mobile :</strong><span
                                            class="ms-2">{{ $student->phone_number }}</span></p>

                                    <p class="text-muted"><strong>Email :</strong> <span
                                            class="ms-2">{{ $student->studentuser->email }}</span></p>

                                    <p class="text-muted"><strong>Home County :</strong> <span
                                            class="ms-2">{{ $student->studentcounty->county }}</span></p>
                                    <p class="text-muted"><strong>Constituency :</strong> <span
                                            class="ms-2">{{ $student->studentconstituency->constituency }}</span>
                                    </p>

                                    <p class="text-muted"><strong>Phone Number :</strong>
                                        <span class="ms-2"> {{ $student->phone_number }} </span>
                                    </p>
                                    <p class="text-muted"><strong>ID Number :</strong>
                                        <span class="ms-2"> {{ $student->id_number }} </span>
                                    </p>
                                </div>


                            </form>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                    <hr>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="">
                                <!-- Product title -->
                                <h3 class="mt-0">School details<a href="javascript: void(0);"
                                        class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>

                                <div class="text-start">
                                    <p class="text-muted"><strong>School Name :</strong> <span
                                            class="ms-2">{{ $bursary->bursaryschool->school_name }}</span></p>

                                    <p class="text-muted"><strong>School County :</strong><span
                                            class="ms-2">{{ $bursary->bursaryschool->school_county }}</span>
                                    </p>

                                    <p class="text-muted"><strong>Category :</strong> <span
                                            class="ms-2">{{ $bursary->bursaryschool->school_category }}</span>
                                    </p>

                                    <p class="text-muted"><strong>Course Taking :</strong> <span
                                            class="ms-2">{{ $student->studentcourse->course_name }}</span></p>
                                    <p class="text-muted"><strong>Current Year of Study :</strong> <span
                                            class="ms-2">{{ $student->year_of_study }}</span>
                                    </p>
                                    <p class="text-muted"><strong>Registration Number:</strong> <span
                                            class="ms-2">{{ $student->registration_number }}</span>
                                    </p>
                                </div>
                                <hr>

                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-7">
                            <form class="ps-lg-4">
                                <!-- Product title -->
                                <h3 class="mt-0">Parent Details<a href="javascript: void(0);"
                                        class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>

                                <div class="text-start">
                                    <p class="text-muted"><strong>Full Name :</strong> <span
                                            class="ms-2">{{ $bursary->guardian_full_names }}</span></p>

                                    <p class="text-muted"><strong>Mobile :</strong><span
                                            class="ms-2">{{ $bursary->guardian_phone_number }}</span></p>
                                </div>
                                <hr>
                                <h3 class="mt-0">Health Details<a href="javascript: void(0);"
                                        class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>

                                <div class="text-start">
                                    <p class="text-muted"><strong>Special Needs:</strong> <span
                                            class="ms-2">{{ $bursary->special_needs }}</span></p>

                                    <p class="text-muted">
                                        <strong>Specification :</strong>
                                        <span class="ms-2">{{ $bursary->special_needs_description }}</span>
                                    </p>
                                    <p class="text-muted">
                                        <strong>Family Status :</strong>
                                        <span class="ms-2">{{ $bursary->family_status }}</span>
                                    </p>
                                    <p class="text-muted">
                                        <strong>Family Losses :</strong>
                                        <span class="ms-2">{{ $bursary->family_income_loss }}</span>
                                    </p>
                                    <p class="text-muted">
                                        <strong>Family Losses :</strong>
                                        <span
                                            class="ms-2">{{ $bursary->family_income_loss_description }}</span>
                                    </p>
                                </div>
                                <hr>

                                <div class="mt-4">
                                    <h6 class="font-14">Points Earned</h6>
                                    <div class="d-flex">

                                        <button type="button" class="btn btn-danger ms-2">
                                            {{ $bursary->points_earned }}</button>
                                    </div>
                                </div>


                            </form>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product title -->
                            <h3 class="mt-0">Helb details<a href="javascript: void(0);" class="text-muted"><i
                                        class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                            <p class="text-muted"><strong>Applied For Helb:</strong> <span
                                    class="ms-2">{{ $bursary->student_helb_status }}</span>
                            <p class="text-muted"><strong>Description:</strong> <span
                                    class="ms-2">{{ $bursary->student_helb_status_decision }}</span>
                            <p class="text-muted"><strong>Previous financial Help:</strong> <span
                                    class="ms-2">{{ $bursary->financial_assistance }}</span>
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <div class="mt-4">
                                <h6 class="font-14">Supporting Explanation:</h6>
                                <p>{{ $bursary->application_support }} </p>
                            </div>
                        </div>
                    </div>
                    @if ($bursary->points_earned == null)
                        <a href="{{ url('cdf/computer-points/'.$bursary->id) }}" class="btn btn-success ">Click Here to compute Bursary Points</a>


                    @endif
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Bursary ID</th>
                                    <th>Bursary Status</th>
                                    <th>Amount Applied</th>
                                    <th>Total Points</th>
                                    <th>Amount Allocated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $bursary->bursary_id }}</td>
                                    <td>
                                        @if ($bursary->bursary_status == 'applied')
                                            <span class="badge bg-primary">Recently Applied</span>
                                        @elseif ($bursary->bursary_status == 'school')
                                            <span class="badge bg-warning">School Processing</span>
                                        @elseif ($bursary->bursary_status == 'cdf')
                                            <span class="badge bg-warning">CDF Reviewing</span>

                                        @elseif ($bursary->bursary_status == 'allocated')
                                            <span class="badge bg-success">Allocated</span>
                                        @else
                                            <span class="badge bg-danger">Denied</span>
                                        @endif
                                    </td>
                                    <td>Kshs. {{ $bursary->amount_applying }}</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">{{ $bursary->points_earned }} </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;"
                                                    aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Kshs. {{ $bursary->bursary_allocated_amount }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

@endsection
