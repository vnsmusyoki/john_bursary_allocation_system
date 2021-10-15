<div>
    <form wire:submit.prevent="createstudent" id="register_form" autocomplete="off" enctype="multipart/form-data">
        @csrf

        <p>Step <strong>1/3</strong> <span>Student Details</span></p>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" wire:model="first_name" name="first_name" id="first_name"
                        class="form-control" />
                    @error('first_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" wire:model="middle_name" name="middle_name" id="middle_name"
                        class="form-control" />
                    @error('middle_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" wire:model="last_name" id="last_name" class="form-control" />
                    @error('last_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="date_of_birth" wire:model="date_of_birth" id="date_of_birth"
                        class="form-control" />
                    @error('date_of_birth')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                <div class="form-group">
                    <label>Adm Number</label>
                    <input type="number" name="admission_number" wire:model="admission_number" id="admission_number"
                        class="form-control" />
                    @error('admission_number')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                <div class="form-group">
                    <label>Class Admitted</label>
                    <select name="class_admission" wire:model="class_admited" class="form-controled"
                        id="class_admission">
                        <option value="">select</option>
                        <option value="Class 1">Class 1</option>
                        <option value="Class 2">Class 2</option>
                        <option value="Class 3">Class 3</option>
                    </select>
                    @error('class_admited')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-xs-12 col-sm-5">
                <div class="form-group">
                    <label>Profile Photo</label>
                    <input type="file" name="profile_photo" wire:model="profile_photo" id="profile_photo"
                        class="form-control" accept="image/*" data-type='image' />
                    @error('profile_photo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email_address" wire:model="email" id="email_address" class="form-control"
                        accept="image/*" data-type='image' />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="gender" wire:model="gender" class="form-controled">
                        <option value="">select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="postal_office" wire:model="postal_office" id="postal_office" class="form-control" />
                    @error('postal_office')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" name="postal_code" wire:model="postal_code" id="postal_code" class="form-control" />
                    @error('postal_code')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-xs-12 col-sm-5">
                <div class="form-group">
                    <label>Postal Address</label>
                    <input type="text" name="postal_address" wire:model="postal_address" id="postal_address"
                        class="form-control"  />
                    @error('postal_address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <br />
        <div align="center">
            <button type="submit" name="btn_student_details" id="btn_student_details"
                class="btn event-action btn-md">Submit Student Details</button>
        </div>


</div>
</form>
</div>
