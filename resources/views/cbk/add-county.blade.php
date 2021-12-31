@extends('cbk.layout')
@section('title', 'Add New Sub County or County')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CBK</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                        <li class="breadcrumb-item active">New County/Sub County</li>
                    </ol>
                </div>
                <h4 class="page-title">Constituency Data</h4>
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
                                Add New Constituency & Constituency Manager
                            </a>
                        </li>

                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ url('cbk/store-constituency') }}" method="POST" autocomplete="off"
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
                                            <input type="number" min="10000" name="amount" class="form-control"
                                                id="floatingInputs">
                                            <label for="floatingInputs">Amount Allocated</label> @error('amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" min="1" name="full_names" class="form-control"
                                                id="floatingInput" placeholder="+2547292929"
                                                value="{{ old('full_names') }}">
                                            <label for="floatingInput">Manager Full Names</label>
                                        </div>
                                        @error('full_names')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-floating">
                                            <input type="text" min="1" class="form-control" id="floatingPassword"
                                                placeholder="98765437" name="email" value="{{ old('email') }}">
                                            <label for="floatingPassword">Manager Email</label>
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingInputGridcon" name="home_county"
                                                aria-label="Floating label select example">
                                                <option value="">Click to select</option>
                                                <option value="Meru">Meru</option>
                                            </select>
                                            <label for="floatingSelect">Home County</label>
                                            @error('home_county')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" name="constituency" class="form-control" id="floatingInput"
                                                placeholder="Tigania west" value="{{ old('constituency') }}">
                                            <label for="floatingInput">Constituency</label>
                                        </div>
                                        @error('constituency')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <br>
                                    <div class="class-lg-3 mt-3">
                                        <button type="submit" class="btn btn-success">Add New Constituency</button>
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
