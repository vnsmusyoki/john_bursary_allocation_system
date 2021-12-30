@extends('students.layout')
@section('title', 'Complete Student Profile')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Student</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Update</a></li>
                        <li class="breadcrumb-item active">Avatar</li>
                    </ol>
                </div>
                <h4 class="page-title">Student Profile Picture</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Update Profile Picture</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">

                            </a>
                        </li>

                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ url('student/update-avatar') }}" method="POST" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="file" name="picture" class="form-control" id="floatingInput">
                                        </div>
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>
                                    <div class="class-lg-3 mt-3">
                                        <button type="submit" class="btn btn-success">Update Avatar Now</button>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection
