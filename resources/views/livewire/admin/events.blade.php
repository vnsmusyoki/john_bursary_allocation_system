<div>
    <form  class="form-add-events"   wire:submit.prevent="addeventnow">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content ">
                <label for="" class="form-label-name">Event Title</label>
            </div>
            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                <input type="text" class="form-control @error('event_title') is-invalid @enderror" wire:model="event_title" placeholder="Event Title" name="event_title" value="{{ old('event_title') }}">
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
                <textarea  id="" name="event-description"  cols="30" wire:model="event_description" rows="10"
                    class="form-control  @error('event_description') is-invalid @enderror"></textarea>
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
                <input type="text" class="form-control  @error('event_place') is-invalid @enderror" wire:model="event_place" placeholder="Event Place">
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
                <div class="select-group" wire:model="event_for">
                    <span  @error('event_for') error-display @enderror><input type="radio" name="event-target" id="">All</span>
                    <span  @error('event_for') error-display @enderror><input type="radio" name="event-target" id="">Students</span>
                    <span @error('event_for') error-display @enderror><input type="radio" name="event-target" id="">Teachers</span>
                    <span @error('event_for') error-display @enderror><input type="radio" name="event-target" id="">Clerk</span>
                    <span @error('event_for') error-display @enderror><input type="radio" name="event-target" id="">Support Staff</span>
                </div>
                @error('event_for')
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
                    <input type="datetime-local" class="form-control  @error('start_time') is-invalid @enderror" wire:model="start_time">
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
                <input type="datetime-local" class="form-control  @error('end_time') is-invalid @enderror" wire:model="end_time">
                @error('end_time')
                    <span class="error-display">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2 form-label-content "> </div>
            <div class="col-lg-10 col-md-10 col-xs-12 col-sm-10">
                <button type="submit" class="btn btn-submit-colored" >Add event</button>
            </div>
        </div>

    </form>
</div>
