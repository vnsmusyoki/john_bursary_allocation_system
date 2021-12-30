@extends('school.layout')
@section('title', 'Application Details')
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
                        Personal Data
                    </p>
                    <ul class="nav nav-tabs nav-bordered mb-3">

                        <li class="nav-item">
                            <a href="#buttons-table-first" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link active">
                                Personal Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#scroll-horizontal-code" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                Parental Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#scroll-horizontal-guradian" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                Family Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#scroll-horizontal-health" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                Health Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#scroll-horizontal-school" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                School Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#scroll-horizontal-codes" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                School Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#scroll-horizontal-data" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                School Action
                            </a>
                        </li>


                    </ul> <!-- end nav-->
                    <div class="tab-content">

                        <div class="tab-pane show active" id="scroll-horizontal-first">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPasswordnames"
                                            value="{{ Auth::user()->name }}">
                                        <label for="floatingPasswordnames">Full Names</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInputemail"
                                            value="{{ Auth::user()->email }}">
                                        <label for="floatingInputemail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPasswordidnumber"
                                            value="{{ $student->id_number }}">
                                        <label for="floatingPasswordidnumber">National ID</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPasswordphone"
                                            value="{{ $student->phone_number }}">
                                        <label for="floatingPasswordphone">Phone Number</label>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPasswordschool"
                                            value="{{ $student->studentschool->school_name }}">
                                        <label for="floatingPasswordschool">School</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPasswordscourse"
                                            value="{{ $student->studentcourse->course_name }}">
                                        <label for="floatingPasswordscourse">Course</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPasswordregno"
                                            value="{{ $student->registration_number }}" style="text-transform:uppercase;">
                                        <label for="floatingPasswordregno">Registration Number</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingPasswordyearstudy"
                                            value="{{ $student->year_of_study }}" style="text-transform:uppercase;">
                                        <label for="floatingPasswordyearstudy">Year of Study</label>
                                    </div>


                                </div>
                            </div>
                        </div> <!-- end preview-->
                        <div class="tab-pane show" id="scroll-horizontal-code">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->guardian_full_names }}"
                                            style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Guardian Full Names</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->guardian_phone_number }}"
                                            style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Guardian Full Names</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show" id="scroll-horizontal-guradian">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->family_status }}" style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Family Status</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->family_income_loss_description }}"
                                            style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Family Losses</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="scroll-horizontal-health">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->special_needs }}" style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Special Needs</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->special_needs_description }}"
                                            style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Specified</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="scroll-horizontal-school">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->student_helb_status }}"
                                            style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Are You on HELB</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->student_helb_status_decision }}"
                                            style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Reasons</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">


                                        <textarea name="" id="" cols="30" rows="10"
                                            class="form-control">{{ $bursary->application_support }}</textarea>
                                        <label for="floatingInputGridss">Additional Information</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="scroll-horizontal-codes">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->amount_applying }}" style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Amount Applied</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->bursary_allocated_amount }}"
                                            style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Amount Allocated</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="floatingInputGridss"
                                            value="{{ $bursary->bursary_status }}" style="text-transform: capitalize;">
                                        <label for="floatingInputGridss">Bursary Status</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane show" id="scroll-horizontal-data">
                            @if ($bursary->school_status == null)
                                <form action="{{ url('school/school-update-application/' . $bursary->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">

                                            <select name="school_status" id="" class="form-control" required>
                                                <option value="">Select</option>
                                                <option value="school">Submit To CDF</option>
                                                <option value="Return">Return to Student</option>
                                            </select>
                                            <label for="floatingInputGridss">Sschool Response</label>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit Data</button>
                                    </div>
                                </form>
                            @elseif($bursary->school_status == "school")
                                <button class="btn btn-success">Verified ,Student Notified & forwaded for Bursary allocation</button>
                            @else
                                <button class="btn btn-danget">Denied ,Student Notified </button>
                            @endif

                        </div>


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->


@endsection
