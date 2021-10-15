@extends('admin.layout')
@section('title', 'All Students')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Dashboard <span>All Students</span></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">All Students</h4>
                        <table id="example" class="table table-striped table-bordered dataTable student-table" cellspacing="0"
                            width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                        aria-label="Photo: activate to sort column ascending" style="width: 27px;">Photo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                        aria-label="Name: activate to sort column ascending" style="width: 150px;">
                                        Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                        aria-label="Name: activate to sort column ascending" style="width: 50px;">Email
                                        Address
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                        aria-label="Name: activate to sort column ascending" style="width: 20px;">Class
                                    </th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" aria-sort="descending"
                                        style="width: 44px;">Adm</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending" style="width: 53px;">
                                        Start date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending" style="width: 107px;">Class
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Photo</th>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Office</th>
                                    <th rowspan="1" colspan="1">Age</th>
                                    <th rowspan="1" colspan="1">Start date</th>
                                    <th rowspan="1" colspan="1">Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @if ($students->count() == 0)
                                    <tr>
                                        <td colspan="6">
                                            <center>No Students Listed</center>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($students as $student)
                                        <tr>
                                            <td><img src="{{ asset('storage/student_photos/' . $student->photo) }}" alt=""
                                                    class="student-image-list">
                                            </td>
                                            <td>{{ $student->full_names }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->class_admited }}</td>
                                            <td>{{ $student->admission_number }}</td>
                                            <td>{{ $student->gender }}</td>
                                            <td class="all-student-actions">
                                                <a href="{{ route('managestudents.show',$student->id) }}" class="view-student"><span><i
                                                            class="bi bi-eye-fill"></i></span></a>
                                                <a href="" class="delete-student"><span><i class="bi bi-trash"></i></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div>
@endsection
