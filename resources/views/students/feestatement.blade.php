@extends('students.layout')
@section('title', 'Fee Statement')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">

                        <a href="javascript: void(0);" class="btn btn-custom-colored ms-2">
                            Print fee statement
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
            <div class="card card-h-100">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Ref #</th>
                                <th>Description</th>
                                <th>Debit Amount</th>
                                <th>Credit Amount</th>
                                <th>Bal(Kes)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12/10/2021</td>
                                <td>RC-90132</td>
                                <td>KCB Fee Sep-dec 2021-Bank deposit</td>
                                <td>0.00</td>
                                <td>10,000.00</td>
                                <td>-10,000.00</td>
                            </tr>

                        </tbody>
                    </table>

                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
