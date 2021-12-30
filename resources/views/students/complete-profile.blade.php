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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Complete</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Student Data</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Account Setup</h4>
                    <p class="text-muted font-14">
                        Finish Setting up your account
                    </p>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Personal Data
                            </a>
                        </li>

                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ url('student/finish-account') }}" method="POST" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="file" min="1" name="picture" class="form-control"
                                                id="floatingInput">
                                        </div>
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" min="1" name="phone_number" class="form-control"
                                                id="floatingInput" placeholder="+2547292929"
                                                value="{{ old('phone_number') }}">
                                            <label for="floatingInput">Phone Number</label>
                                        </div>
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-floating">
                                            <input type="number" min="1" class="form-control" id="floatingPassword"
                                                placeholder="98765437" name="id_number" value="{{ old('id_number') }}">
                                            <label for="floatingPassword">ID Number</label>
                                        </div>
                                        @error('id_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br>
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect" name="year_of_study"
                                                aria-label="Floating label select example">
                                                <option value="">Select year of Study</option>
                                                <option value="Year 1">Year One</option>
                                                <option value="Year 2">Year Two</option>
                                                <option value="Year 3">Year Three</option>
                                                <option value="Year 4">Year Four</option>
                                            </select>
                                            <label for="floatingSelect">Year of Study</label>
                                        </div>
                                        @error('year_of_study')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-floating">
                                            <select class="form-select" id="floatingInputGridcon"
                                            name="home_county" aria-label="Floating label select example">
                                            <option value="">Click to select</option>
                                            @foreach ($counties as $county)
                                                <option value="{{ $county->id }}">
                                                    {{ $county->county }}
                                                </option>
                                            @endforeach
                                        </select>
                                            <label for="floatingSelect">Home County</label>
                                        </div>
                                        @error('home_county')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br>
                                        <div class="form-floating">
                                            <input type="text" name="registration_number" class="form-control"
                                                id="floatingInput" placeholder="CT209/0982/18"
                                                value="{{ old('registration_number') }}"
                                                style="text-transform: uppercase;">
                                            <label for="floatingInput">Registration Number</label>
                                        </div>
                                        @error('registration_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating">

                                                    <select class="form-select" id="floatingInputGridcon"
                                                        name="constituency" aria-label="Floating label select example">
                                                        <option value="">Click to select</option>
                                                        @foreach ($counties as $county)
                                                            <option value="{{ $county->id }}">
                                                                {{ $county->constituency }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingInputGridcon">Constituency</label>
                                                </div>
                                                @error('constituency')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelectGrid"
                                                        name="course_of_study" aria-label="Floating label select example">
                                                        <option value="">Select your course of Study</option>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}">
                                                                {{ $course->course_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelectGrid">Course Studying</label>
                                                </div>
                                                @error('course_of_study')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelectGrid" name="school"
                                                aria-label="Floating label select example">
                                                <option value="">Select your school</option>
                                                @foreach ($schools as $school)
                                                    <option value="{{ $school->id }}">{{ $school->school_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelectGrid">School Studying</label>
                                        </div>
                                        @error('school')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="class-lg-3 mt-3">
                                        <button type="submit" class="btn btn-success">Finish Account Set Up</button>
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
