@extends('cbk.layout')
@section('title', 'All Applications')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">County </a></li>
                        <li class="breadcrumb-item active">Constituencies</li>
                    </ol>
                </div>
                <h4 class="page-title">All Constituencies</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <p class="text-muted font-14">
                        Manage Constituencies
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#buttons-table-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                All County Constituencies
                            </a>
                        </li>

                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-horizontal-preview">
                            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profile</th>
                                        <th>Manager</th>
                                        <th>Email Address</th>
                                        <th>County</th>
                                        <th>Constituency</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($counties->count() >= 1)
                                        @foreach ($counties as $key => $county)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td><img src="{{ asset('storage/profiles/'.$county->countyuser->picture) }}" alt="" style="height:60px;width:60px;border-radius:50%;"></td>
                                                <td>{{ $county->countyuser->name }}</td>
                                                <td>{{ $county->countyuser->email }}</td>
                                                <td>{{ $county->created_at->addHours(3)->format('l, d/m/Y') }}</td>

                                                <td>{{ $county->county }}</td>
                                                <td>{{ $county->constituency }}</td>
                                            </tr>
                                        @endforeach

                                    @endif



                                </tbody>
                            </table>
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->


@endsection
