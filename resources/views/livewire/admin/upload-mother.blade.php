<div>
    <form wire:submit.prevent="uploadmother" id="register_form" autocomplete="off">
        @csrf
        <p>Step <strong>3/3</strong> <span>Mother Details</span></p>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="form-group">
                    <label>Full Names</label>
                    <input type="text" wire:model="mother_names" name="mother_names" id="mother_names"
                        class="form-control" />
                    @error('mother_names')
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
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                <div class="form-group">
                    <label>Status</label>
                    <select name="mother_status" wire:model="mother_status" class="form-controled" id="mother_status">
                        <option value="">select</option>
                        <option value="Alive">Alive</option>
                        <option value="Dead">Dead</option>
                    </select>
                    @error('mother_status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <br />
        <div align="center">
            <button type="submit" name="btn_student_details" class="btn event-action btn-md">Upload Mother
                Details</button>
        </div>
    </form>
</div>
