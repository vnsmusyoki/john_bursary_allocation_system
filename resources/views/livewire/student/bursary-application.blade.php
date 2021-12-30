<div>
    <form action="" wire:submit.prevent="applybursary" autocomplete="off" enctype="multipart/form-data">
        @if ($currentstep == 1)
            <div class="card-body">
                <h4 class="header-title">Step 1/3 - Personal Details</h4>
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
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordnames"
                                        value="{{ Auth::user()->name }}">
                                    <label for="floatingPasswordnames">Full Names</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInputemail"
                                        value="{{ Auth::user()->email }}">
                                    <label for="floatingInputemail">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordidnumber"
                                        value="{{ $student->id_number }}">
                                    <label for="floatingPasswordidnumber">National ID</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordphone"
                                        value="{{ $student->phone_number }}">
                                    <label for="floatingPasswordphone">Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">

                                    <input type="text" class="form-control" id="floatingInputGridss"
                                        value="{{ old('guardian_full_names') }}" wire:model="guardian_full_names">
                                    <label for="floatingInputGridss">Guardian Full Names</label>
                                </div>
                                @error('guardian_full_names')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordschool"
                                        value="{{ $student->studentschool->school_name }}">
                                    <label for="floatingPasswordschool">School</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordscourse"
                                        value="{{ $student->studentcourse->course_name }}">
                                    <label for="floatingPasswordscourse">Course</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordregno"
                                        value="{{ $student->registration_number }}" style="text-transform:uppercase;">
                                    <label for="floatingPasswordregno">Registration Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordyearstudy"
                                        value="{{ $student->year_of_study }}" style="text-transform:uppercase;">
                                    <label for="floatingPasswordyearstudy">Year of Study</label>
                                </div>

                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid"
                                                value="{{ old('guardian_phone_number') }}" placeholder="0720992288"
                                                wire:model="guardian_phone_number">
                                            <label for="floatingInputGrid">Guardian Phone Number</label>
                                        </div>
                                        @error('guardian_phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelectGrid"
                                                aria-label="Floating label select example" name="gender">
                                                <option value="">Student Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <label for="floatingSelectGrid">Select Your Gender</label>
                                        </div>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end tab-content-->
            </div> <!-- end card-body -->
        @endif
        @if ($currentstep == 2)
            <div class="card-body">
                <h4 class="header-title">Step 2/3 - Personal Details</h4>
                <p class="text-muted font-14">
                    Fill in the following information
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
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect21" wire:model="student_category"
                                        aria-label="Floating label select example">
                                        <option>Click to select</option>
                                        <option value="KUCCPS">KUCCPS</option>
                                        <option value="SSP">SSP</option>
                                    </select>
                                    <label for="floatingSelect21">Indicate whether you are KUCCPS or SSP</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect22"
                                        wire:model="student_helb_status" aria-label="Floating label select example">
                                        <option>Click to select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                    <label for="floatingSelect22">Are You on HELB</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="If No, Explain WHY"
                                        wire:model="student_helb_status_decision" id="floatingTextarea23"
                                        style="height: 100px">{{ old('student_helb_status_decision') }}</textarea>
                                    <label for="floatingTextarea23">Comments</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectbursary"
                                        wire:model="financial_assistance" aria-label="Floating label select example"
                                        multiple style="height: 200px">
                                        <option>Click to select</option>
                                        <option value="High School Bursary">High School Bursary</option>
                                        <option value="Ministry of Education Bursary">Ministry of Education Bursary
                                        </option>
                                        <option value="Community Based Organization Support">Community Based
                                            Organization
                                            Support</option>
                                        <option value="Faith Based Organization Support">Faith Based Organization
                                            Support
                                        </option>
                                        <option value="Children's Home or Orphanage Support">Children's Home or
                                            Orphanage
                                            Support</option>
                                    </select>
                                    <label for="floatingSelectbursary">Tick Against financial assistance ever
                                        received.</label>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectfamily" wire:model="family_status"
                                        aria-label="Floating label select example">
                                        <option value="">Click to select</option>
                                        <option value="Total Orphan">Total Orphan</option>
                                        <option value="Single Parent Orphan">Single Parent Orphan</option>
                                        <option value="Single Parent">Single Parent</option>
                                        <option value="Separated or Divorced Parent">Separated or Divorced Parent
                                        </option>
                                    </select>
                                    <label for="floatingSelectfamily">Select Family Status</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectspecialneeds"
                                        wire:model="special_needs" aria-label="Floating label select example">
                                        <option value="">Click to select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <label for="floatingSelectspecialneeds">Do You have any special Needs?.</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectneedsdesc"
                                        wire:model="special_needs_description"
                                        aria-label="Floating label select example">
                                        <option value="">Click to select</option>
                                        <option value="Visual Impairment">Visual Impairment</option>
                                        <option value="Hearing Impairment">Hearing Impairment</option>
                                        <option value="Physically Challenged">Physically Challenged</option>
                                        <option value="Cerebral Palsy">Cerebral Palsy</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <label for="floatingSelectneedsdesc">If Yes,please select accordingly and attach
                                        relevant
                                        documents.</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectincomeloss"
                                        wire:model="family_income_loss" aria-label="Floating label select example">
                                        <option>Click to select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <label for="floatingSelectincomeloss">has your Family experienced loss of
                                        income?.</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectlossdesc"
                                        wire:model="family_income_loss_description"
                                        aria-label="Floating label select example">
                                        <option>Click to select</option>
                                        <option value="Retirement">Retirement</option>
                                        <option value="Retrenchment">Retrenchment</option>
                                        <option value="Incapacitation">Incapacitation</option>
                                        <option value="Loss of Job">Loss of Job</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <label for="floatingSelectlossdesc">If Yes,indicate appropriately.</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" min="1000" class="form-control" id="floatingPasswordamount"
                                        wire:model="amount_applying" value="{{ old('amount_applying') }}">
                                    <label for="floatingPasswordamount">Amount Applying for</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPasswordcourse"
                                        value="{{ $student->studentcourse->course_name }}">
                                    <label for="floatingPasswordcourse">Course</label>
                                </div>

                            </div>

                        </div>
                    </div>

                </div> <!-- end tab-content-->
            </div> <!-- end card-body -->
        @endif
        @if ($currentstep == 3)
            <div class="card-body">
                <h4 class="header-title">Step 3/3 - Attachment Details</h4>
                <p class="text-muted font-14">
                    Fill in the following information
                </p>
                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Student Attachments
                        </a>
                    </li>

                </ul> <!-- end nav-->

                <div class="tab-content">
                    <div class="tab-pane show active" id="floating-preview">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" id="floatingPasswordattachfee"
                                        wire:model="fee_structure" value="{{ old('fee_structure') }}">
                                    <label for="floatingPasswordattachfee">Fee structure.. Attach pdf documents
                                        only</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" id="floatingPasswordattachgrade"
                                        wire:model="school_perfomance" value="{{ old('school_perfomance') }}">
                                    <label for="floatingPasswordattachgrade">Last School Perfomance..attach pdf
                                        only</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" id="floatingPasswordattachpdf"
                                        wire:model="special_needs_attachment"
                                        value="{{ old('special_needs_attachment') }}">
                                    <label for="floatingPasswordattachpdf">Attach special needs pdf document.
                                        <small>(Optional)</small></label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" id="floatingPasswordattachoptional"
                                        wire:model="relevant_attachment" value="{{ old('relevant_attachment') }}">
                                    <label for="floatingPasswordattachoptional">Any other relevant attachment.
                                        <small>(Optional)</small></label>
                                </div>


                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="If No, Explain WHY"
                                        wire:model="application_support" id="floatingTextareasupport"
                                        style="height: 100px">{{ old('application_support') }}</textarea>
                                    <label for="floatingTextareasupport">Use the space below to provide any other
                                        information that
                                        may support your application. </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end tab-content-->
            </div> <!-- end card-body -->
        @endif
        <div class="card-body">
            @if ($currentstep == 1)
                <div class="row">
                    <div class="col-lg-10"> </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-primary" wire:click="increasestep()">Proceed</button>
                    </div>
                </div>
            @endif
            @if ($currentstep == 2)
                <div class="row">
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-warning" wire:click="descreaseStep()">Previous</button>
                    </div>
                    <div class="col-lg-8">

                    </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-primary" wire:click="increasestep()">Next</button>
                    </div>
                </div>
            @endif
            @if ($currentstep == 3)
                <div class="row">
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-warning" wire:click="descreaseStep()">Previous</button>
                    </div>
                    <div class="col-lg-7">

                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-success">Submit Application</button>
                    </div>
                </div>
            @endif

        </div>
    </form>
</div>
