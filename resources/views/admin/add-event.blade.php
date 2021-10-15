@extends('admin.layout')
@section('title', 'Add Events')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">

                        <a href="{{ url('admin/all-events') }}" class="btn btn-admin-cancel ms-2">
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
        <div class="col-lg-12 col-md-12 col-xs-12 allevents">
            <div class="top-all-events">
                <section>
                    <h4 class="style-event-title">Add event</h4>
                </section>
                <section>

                </section>
            </div>
            <div class="bottom-all-events">
                {{-- @livewire('admin.events') --}}
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
                                placeholder="Event Place" name="event_place" value="{{  old('event_place') }}">
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
                                <span @error('event_target') error-display @enderror><input type="radio" name="event_target"
                                        id="" value="All">All</span>
                                <span @error('event_target') error-display @enderror><input type="radio" name="event_target"
                                        id="" value="Students">Students</span>
                                <span @error('event_target') error-display @enderror><input type="radio" name="event_target"
                                        id="" value="Teachers">Teachers</span>
                                <span @error('event_target') error-display @enderror><input type="radio" name="event_target"
                                        id="" value="Clerk">Clerk</span>
                                <span @error('event_target') error-display @enderror><input type="radio" name="event_target"
                                        id="" value="Support Staff">Support Staff</span>
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
                                <input type="datetime-local" name="start_time" value="{{  old('start_time') }}"
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
                            <input type="datetime-local" name="end_time" value="{{  old('end_time') }}" class="form-control  @error('end_time') is-invalid @enderror">
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
        </div>
    </div>



@endsection
