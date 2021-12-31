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

                                 <!-- Product title -->
                                 <h3 class="mt-0">School details<a href="javascript: void(0);"
                                    class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                          
                            <div class="text-start">
                                <p class="text-muted"><strong>School Name :</strong> <span
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

                                <p class="text-muted"><strong>Languages :</strong>
                                    <span class="ms-2"> English, Kiswahili </span>
                                </p>


                            </div>
                            <hr>

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

                                    <p class="text-muted"><strong>Languages :</strong>
                                        <span class="ms-2"> English, Kiswahili </span>
                                    </p>


                                </div>
                                <hr>
                                <div class="mt-4">
                                    <h6 class="font-14">Supporting Explanation:</h6>
                                    <p>{{ $bursary->application_support }} </p>
                                </div>
                                <div class="mt-4">
                                    <h6 class="font-14">Points Earned</h6>
                                    <div class="d-flex">

                                        <button type="button" class="btn btn-danger ms-2">
                                            {{ $bursary->points_earned }}</button>
                                    </div>
                                </div>
                                <!-- Product information -->
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="font-14">Available Stock:</h6>
                                            <p class="text-sm lh-150">1784</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="font-14">Number of Orders:</h6>
                                            <p class="text-sm lh-150">5,458</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="font-14">Revenue:</h6>
                                            <p class="text-sm lh-150">$8,57,014</p>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div> <!-- end col -->
                    </div> <!-- end row-->

                    <div class="table-responsive mt-4">
                        <table class="table table-bordered table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Outlets</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ASOS Ridley Outlet - NYC</td>
                                    <td>$139.58</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">478 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 56%;"
                                                    aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$1,89,547</td>
                                </tr>
                                <tr>
                                    <td>Marco Outlet - SRT</td>
                                    <td>$149.99</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">73 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 16%;"
                                                    aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$87,245</td>
                                </tr>
                                <tr>
                                    <td>Chairtest Outlet - HY</td>
                                    <td>$135.87</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">781 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 72%;"
                                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$5,87,478</td>
                                </tr>
                                <tr>
                                    <td>Nworld Group - India</td>
                                    <td>$159.89</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">815 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 89%;"
                                                    aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$55,781</td>
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
