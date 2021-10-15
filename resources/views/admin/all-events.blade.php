@extends('admin.layout')
@section('title', 'All Events')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">

                        <a href="{{ url('admin/add-event') }}" class="btn btn-admin-colored ms-2">
                            Add new event
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 allevents">
            <div class="top-all-events">
                <section>
                    <h4>List events</h4>
                </section>
                <section>

                </section>
            </div>
            <div class="bottom-all-events" style="overflow-x: scroll">
                <table id="events" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%"  role="grid" aria-describedby="example_info" style="width: 100%;" >
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="ID: activate to sort column ascending" style="width: 10px;">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="Title: activate to sort column ascending" style="width: 115px;">
                                Title</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="Venue: activate to sort column ascending" style="width: 100px;">Venue
                            </th>
                            <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="Description: activate to sort column ascending" aria-sort="descending"
                                style="width: 200px;">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="Audience: activate to sort column ascending" style="width: 77px;">
                                Audience</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="Start Time: activate to sort column ascending" style="width: 77px;">
                                Start date</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="End Time: activate to sort column ascending" style="width: 77px;">End Time
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                aria-label="Operations: activate to sort column ascending" style="width: 107px;">Operations
                            </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">Title</th>
                            <th rowspan="1" colspan="1">Venue</th>
                            <th rowspan="1" colspan="1">Description</th>
                            <th rowspan="1" colspan="1">Audience</th>
                            <th rowspan="1" colspan="1">Start time</th>
                            <th rowspan="1" colspan="1">End Time</th>
                            <th rowspan="1" colspan="1">Operations</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->event_place }}</td>
                                <td>
                                    {{ str_limit(strip_tags($event->description), 80) }}

                                </td>
                                <td>{{ $event->event_for }}</td>
                                <td class="event-time">{{ $event->start }}</td>
                                <td class="event-time">{{ $event->end }}</td>
                                <td>
                                    <button class="event-action event-view" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-title="{{ $event->title }}"
                                        data-description="{{ strip_tags($event->description) }}"
                                        data-starttime="{{ $event->start }}"
                                        data-endtime="{{ $event->end }}"
                                        data-eventplace="{{ $event->event_place }}"
                                        data-audience="{{ $event->event_for }}"><i class="bi bi-eye"></i></button>
                                    <button class="event-action event-edit" data-bs-toggle="modal"
                                        data-bs-target="#eventedit" data-title="{{ $event->title }}"
                                        data-description="{{ strip_tags($event->description) }}"
                                        data-starttime="{{ $event->start}}"
                                        data-endtime="{{ $event->end }}"
                                        data-eventplace="{{ $event->event_place }}"
                                        data-audience="{{ $event->event_for }}"><i class="bi bi-pen"></i></button>
                                    <a href="" class="event-action event-delete"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal for viewing the events -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="view-info">
                        <p><strong>Event Title</strong></p>
                        <span id="view-event-title"></span>
                    </div>
                    <div class="view-info">
                        <p><strong>Event For</strong></p>
                        <span id="view-event-audience"></span>
                    </div>
                    <div class="view-info">
                        <p><strong>Time</strong></p>
                        <span id="view-event-starttime"></span> to <span id="view-event-endtime"></span>
                    </div>
                    <div class="view-info">
                        <p><strong>Held at</strong></p>
                        <span id="view-event-place"></span>
                    </div>
                    <div class="view-info">
                        <p><strong>Description</strong></p>
                        <span id="view-event-description"></span>
                    </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for editing events -->
    <div class="modal fade" id="eventedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-add-events" method="POST" action="{{ url('admin/add_event') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content ">
                                <label for="" class="form-label-name">Event Title</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                                <input type="text" class="form-control @error('event_title') is-invalid @enderror"
                                    placeholder="Event Title" name="event_title" value="{{ old('event_title') }}">
                                @error('event_title')
                                    <span class="error-display">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content ">
                                <label for="" class="form-label-name">Event Description</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                                <textarea id="" name="event_description" cols="30" rows="10"
                                    class="form-control  @error('event_description') is-invalid @enderror">{{ old('event_description') }}</textarea>
                                @error('event_description')
                                    <span class="error-display">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content ">
                                <label for="" class="form-label-name">Event Place</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                                <input type="text" class="form-control  @error('event_place') is-invalid @enderror"
                                    placeholder="Event Place" name="event_place" value="{{ old('event_place') }}">
                                @error('event_place')
                                    <span class="error-display">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content ">
                                <label for="" class="form-label-name">For</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                                <div class="select-group">
                                    <span @error('event_target') error-display @enderror><input type="radio"
                                            name="event_target" id="" value="All">All</span>
                                    <span @error('event_target') error-display @enderror><input type="radio"
                                            name="event_target" id="" value="Students">Students</span>
                                    <span @error('event_target') error-display @enderror><input type="radio"
                                            name="event_target" id="" value="Teachers">Teachers</span>
                                    <span @error('event_target') error-display @enderror><input type="radio"
                                            name="event_target" id="" value="Clerk">Clerk</span>
                                    <span @error('event_target') error-display @enderror><input type="radio"
                                            name="event_target" id="" value="Support Staff">Support Staff</span>
                                </div>
                                @error('event_target')
                                    <span class="error-display">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content ">
                                <label for="" class="form-label-name">Start Date</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                                <div class="form-group">
                                    <input type="datetime-local" name="start_time" value="{{ old('start_time') }}"
                                        class="form-control  @error('start_time') is-invalid @enderror">
                                    @error('start_time')
                                        <span class="error-display">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content ">
                                <label for="" class="form-label-name">End Date</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                                <input type="datetime-local" name="end_time" value="{{ old('end_time') }}"
                                    class="form-control  @error('end_time') is-invalid @enderror">
                                @error('end_time')
                                    <span class="error-display">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content "> </div>
                            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                                <button type="submit" class="btn btn-submit-colored">Add event</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
