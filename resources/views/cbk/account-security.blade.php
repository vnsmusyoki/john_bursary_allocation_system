@extends('cbk.layout')
@section('title', 'Account Security')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CDF</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Update</a></li>
                        <li class="breadcrumb-item active">Avatar</li>
                    </ol>
                </div>
                <h4 class="page-title">CDF Profile Picture</h4>
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
                            <form action="{{ url('cbk/update-avatar') }}" method="POST" autocomplete="off"
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
                            <form action="{{ url('cbk/update-email') }}" method="POST" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="email" class="form-control" id="floatingInput">
                                            <label for="">Email Address</label>
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>
                                    <div class="class-lg-3 mt-3">
                                        <button type="submit" class="btn btn-success">Update Email Address</button>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Update Password</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">

                            </a>
                        </li>

                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ url('cbk/update-password') }}" method="POST" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" class="form-control"
                                                id="floatingInput">
                                            <label for="">Password</label>
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="floatingInput">
                                            <label for="">Confirm Password</label>
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>
                                    <div class="class-lg-3 mt-3">
                                        <button type="submit" class="btn btn-success">Update Password</button>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
@endsection
