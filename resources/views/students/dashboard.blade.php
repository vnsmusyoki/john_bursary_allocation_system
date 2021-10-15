@extends('students.layout')
@section('title', 'Main Dashboard')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard Analysis</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-5 col-lg-6">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <img src="{{ asset('assets/images/reading-book.svg') }}" class="img-fluid widget-icon"
                                    alt="">
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Students">Class
                            </h5>
                            <h3 class="mt-3 mb-3">3, North</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <img src="{{ asset('assets/images/coaching.svg') }}" class="img-fluid widget-icon" alt="">
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Fee Balance</h5>
                            <h3 class="mt-3 mb-3">Ksh: 5,543</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <img src="{{ asset('assets/images/user.svg') }}" class="img-fluid widget-icon" alt="">
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Last  Grade</h5>
                            <h3 class="mt-3 mb-3">B</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <img src="{{ asset('assets/images/support.svg') }}" class="img-fluid widget-icon" alt="">
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Growth">Check Last</h5>
                            <h3 class="mt-3 mb-3">26</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-1 col-sm-2"></div>
                <div class="col-lg-6 col-md-6 col-xs-10 col-sm-8">
                    <img src="{{ asset('assets/images/user.svg') }}" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-xs-1 col-sm-2"></div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-7 col-lg-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <h4 class="header-title mb-3">Basic Information</h4>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Admission Number</td>
                                <td>567</td>
                            </tr>
                            <tr>
                                <td>Full Names</td>
                                <td>Evans Kimeu Musyoki</td>
                            </tr>
                            <tr>
                                <td>Class</td>
                                <td>Form 3, East</td>
                            </tr>
                            <tr>
                                <td>Total Subjects</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Fee Balance</td>
                                <td>Ksh: 00</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td>County</td>
                                <td>Makueni</td>
                            </tr>
                            <tr>
                                <td>Parent Contacts</td>
                                <td>0720882594 <br> 0111808686</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>student@school.gmail.com</td>
                            </tr>
                            <tr>
                                <td>Postal Address</td>
                                <td>116-90132 <br> Sultan Hamud</td>
                            </tr>
                        </tbody>
                    </table>

                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->


@endsection
