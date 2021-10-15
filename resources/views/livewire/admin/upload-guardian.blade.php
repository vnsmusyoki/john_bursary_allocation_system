<div>
    <form wire:submit.prevent="uploadguardian" id="register_form" autocomplete="off">
        @csrf
        <p>Step <strong>3/3</strong> <span>Guardian Details</span></p>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label>Full Names</label>
                    <input type="text" wire:model="guardian_names" name="guardian_names" id="guardian_names"
                        class="form-control" />
                    @error('guardian_names')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" name="phone_number" wire:model="phone_number" id="phone_number"
                        class="form-control" />
                    @error('phone_number')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" wire:model="email" id="email" class="form-control" />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <br />
        <div align="center">
            <a href="{{ route('managestudents.index') }}" type="submit" name="btn_student_details" class="btn bg-danger btn-md">No Guardian
                </a>
            <button type="submit" name="btn_student_details" class="btn event-action btn-md">Upload Guardian Details
                </button>
        </div>
    </form>
</div>
