@extends('admin.layout')
@section('title', 'Register New Student')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">

                        <a href="{{ route('managestudents.index') }}" class="btn event-delete ms-2">
                            Cancel add
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12"></div>
        <div class="col-lg-1- col-md-10 col-xs-12 col-sm-12">
            <form method="post" id="register_form" autocomplete="off" action="{{ route('managestudents.store') }}"
                enctype="multipart/form-data">
                @csrf
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active_tab1" id="list_student_details">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive_tab1" id="list_guardian_details">Guardian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive_tab1" id="list_contact_details">Address</a>
                    </li>
                </ul>
                <div class="tab-content" style="margin-top:16px;">
                    <div class="tab-pane active" id="student_details">
                        <div class="panel panel-default">
                            <div class="panel-heading">Student Details</div>
                            <br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" />
                                            <span id="error_first_name" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" name="middle_name" id="middle_name" class="form-control" />
                                            <span id="error_middle_name" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" />
                                            <span id="error_last_name" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="date_of_birth" id="date_of_birth"
                                                class="form-control" />
                                            <span id="error_date_of_birth" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Adm Number</label>
                                            <input type="number" name="admission_number" id="admission_number"
                                                class="form-control" />
                                            <span id="error_admission_number" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Class Admitted</label>
                                            <select name="class_admission" class="form-controled" id="class_admission">
                                                <option value="">select</option>
                                                <option value="Class 1">Class 1</option>
                                                <option value="Class 2">Class 2</option>
                                                <option value="Class 3">Class 3</option>
                                            </select>
                                            <span id="error_class_admission" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-5">
                                        <div class="form-group">
                                            <label>Profile Photo</label>
                                            <input type="file" name="profile_photo" id="profile_photo"
                                                class="form-control" accept="image/*" data-type='image' />
                                            <span id="error_profile_photo" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" name="email_address" id="email_address"
                                                class="form-control" accept="image/*" data-type='image' />
                                            <span id="error_email_address" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" id="gender" class="form-controled">
                                                <option value="">select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span id="error_gender" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div align="center">
                                    <button type="button" name="btn_student_details" id="btn_student_details"
                                        class="btn event-action btn-md">Next</button>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="guardian_details">
                        <div class="panel panel-default">
                            <div class="panel-heading">Guardian Details</div>

                            <div class="panel-body">
                                <p>
                                    <center><strong>1. Father details</strong></center>
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Full Names</label>
                                            <input type="text" name="father_names" id="father_names"
                                                class="form-control" />
                                            <span id="error_father_names" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="father_phone_number" id="father_phone_number"
                                                class="form-control" />
                                            <span id="error_father_phone_number" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="father_status" class="form-controled" id="father_status">
                                                <option value="">select</option>
                                                <option value="Dead">Dead</option>
                                                <option value="Alive">Alive</option>
                                            </select>
                                            <span id="error_father_status" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Father Email</label>
                                            <input type="text" name="father_email" id="father_email"
                                                class="form-control" />
                                            <span id="error_father_email" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <p><strong>2. Mother details</strong></p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Full Names</label>
                                            <input type="text" name="mother_names" id="mother_names"
                                                class="form-control" />
                                            <span id="error_mother_names" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="mother_phone_number" id="mother_phone_number"
                                                class="form-control" />
                                            <span id="error_mother_phone_number" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="mother_status" class="form-controled" id="mother_status">
                                                <option value="">select</option>
                                                <option value="Dead">Dead</option>
                                                <option value="Alive">Alive</option>
                                            </select>
                                            <span id="error_mother_status" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Mother Email</label>
                                            <input type="text" name="mother_email" id="mother_email"
                                                class="form-control" />
                                            <span id="error_mother_email" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <p><strong>3. Guardian details</strong></p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Guardian Names</label>
                                            <input type="text" name="guardian_names" id="guardian_names"
                                                class="form-control" />
                                            <span id="error_guardian_names" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="guardian_phone_number" id="guardian_phone_number"
                                                class="form-control" />
                                            <span id="error_guardian_phone_number" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Guardian Email</label>
                                            <input type="text" name="guardian_email" id="guardian_email"
                                                class="form-control" />
                                            <span id="error_guardian_email" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div align="center">
                                    <button type="button" name="previous_btn_guardian_details"
                                        id="previous_btn_guardian_details" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="btn_guardian_details" id="btn_guardian_details"
                                        class="btn event-action btn-lg">Next</button>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="contact_details">
                        <div class="panel panel-default">
                            <div class="panel-heading">Fill Contact Details</div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Postal office</label>
                                            <input type="number" name="postal_office" id="postal_office"
                                                class="form-control" />
                                            <span id="error_postal_office" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="number" name="postal_code" id="postal_code"
                                                class="form-control" />
                                            <span id="error_postal_code" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Postal Address</label>
                                            <input type="text" name="postal_address" id="postal_address"
                                                class="form-control" />
                                            <span id="error_postal_address" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div align="center">
                                    <button type="button" name="previous_btn_contact_details"
                                        id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="btn_contact_details" id="btn_contact_details"
                                        class="btn btn-success btn-md">Register</button>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12"></div>
    </div>



@endsection
