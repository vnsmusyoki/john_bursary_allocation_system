@extends('students.layout')
@section('title', 'Apply Loan Here')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Student</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Bursary</a></li>
                        <li class="breadcrumb-item active">Application</li>
                    </ol>
                </div>
                <h4 class="page-title">Apply for a new bursary</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Step 1/4 - Personal Details</h4>
                    <p class="text-muted font-14">
                        Provide the personal details related to you
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="mb-3">Example</h5>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <h5 class="mb-3 mt-4">Textareas</h5>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea" style="height: 100px"></textarea>
                                        <label for="floatingTextarea">Comments</label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <h5 class="mb-3">Selects</h5>
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelect">Works with selects</label>
                                    </div>

                                    <h5 class="mb-3 mt-4">Layout</h5>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInputGrid"
                                                    placeholder="name@example.com" value="mdo@example.com">
                                                <label for="floatingInputGrid">Email address</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid"
                                                    aria-label="Floating label select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <label for="floatingSelectGrid">Works with
                                                    selects</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection
