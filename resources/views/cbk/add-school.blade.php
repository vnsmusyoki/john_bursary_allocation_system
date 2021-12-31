@extends('cbk.layout')
@section('title', 'Add New School')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CBK</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                        <li class="breadcrumb-item active">New School</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Add New School
                            </a>
                        </li>

                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ url('cbk/store-school') }}" method="POST" autocomplete="off"
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
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="school_name" class="form-control"
                                                value="{{ old('school_name') }}" id="floatingInputs">
                                            <label for="floatingInputs">School Name</label> @error('school_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="school_location" class="form-control"
                                                value="{{ old('school_location') }}" id="floatingInputs">
                                            <label for="floatingInputs">Location Address</label>
                                            @error('school_location')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="full_names" class="form-control" id="floatingInput"
                                                placeholder="+2547292929" value="{{ old('full_names') }}">
                                            <label for="floatingInput">Manager Full Names</label>
                                        </div>
                                        @error('full_names')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder="example@gmail.com" name="email" value="{{ old('email') }}">
                                            <label for="floatingPassword">Manager Email</label>
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" name="school_contacts" class="form-control" id="floatingInput"
                                                value="{{ old('school_contacts') }}">
                                            <label for="floatingInput">School Contacts</label>
                                        </div>
                                        @error('school_contacts')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="school_email" class="form-control" id="floatingInput"
                                                value="{{ old('school_email') }}">
                                            <label for="floatingInput">School Email Address</label>
                                        </div>
                                        @error('school_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select name="county" id="" class="form-control">
                                                <option value="">Select</option>
                                                @foreach ($counties as $county)
                                                    <option value="{{ $county->constituency }}">
                                                        {{ $county->constituency }}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingInput">Constituency</label>
                                        </div>
                                        @error('county')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select name="school_category" id="" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Public University">Public University</option>
                                                <option value="Private University">Private University</option>
                                            </select>
                                            <label for="floatingInput">School Category</label>
                                        </div>
                                        @error('school_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="url" name="school_link" class="form-control"
                                                value="{{ old('school_link') }}" pattern="https?://.+"
                                                id="floatingInputs">
                                            <label for="floatingInputs">School Website Link</label>
                                            @error('school_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <br>
                                    <div class="class-lg-3 mt-3">
                                        <button type="submit" class="btn btn-success">Add New School</button>
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
