<?php

namespace App\Http\Livewire\Student;

use App\Models\BursaryApplication as ModelsBursaryApplication;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;
use Brian2694\Toastr\Facades\Toastr;

class BursaryApplication extends Component
{
    use WithFileUploads;
    public $guardian_full_names;
    public $gender;
    public $guardian_phone_number;

    public $student_category;
    public $student_helb_status;
    public $student_helb_status_decision;
    public $financial_assistance;
    public $family_status;
    public $special_needs;
    public $special_needs_description;
    public $family_income_loss_description;
    public $family_income_loss;
    public $amount_applying;



    public $fee_structure;
    public $special_needs_attachment;
    public $school_perfomance;
    public $relevant_attachment;
    public $application_support;

    public $totalsteps = 3;
    public $currentstep = 1;

    public function mount()
    {
        $this->currentstep = 1;
    }

    public function increasestep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentstep++;
        if ($this->currentstep > $this->totalsteps) {
            $this->currentstep = $this->totalsteps;
        }
    }
    public function descreaseStep()
    {
        $this->resetErrorBag();
        $this->currentstep = $this->currentstep - 1;
        if ($this->currentstep < 1) {
            $this->currentstep = 1;
        }
    }
    public function render()
    {
        $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
        return view('livewire.student.bursary-application', compact('student'));
    }
    public function validateData()
    {
        if ($this->currentstep == 1) {
            $this->validate([
                'guardian_full_names' => 'required|string',
                'gender' => 'required',
                'guardian_phone_number' => 'required|digits:10',
            ]);
        } elseif ($this->currentstep == 2) {
            $this->validate([
                'student_category' => 'required',
                'student_helb_status' => 'required',
                'student_helb_status_decision' => 'required_if:student_helb_status,No',
                'financial_assistance' => 'required',
                'family_status' => 'required',
                'special_needs' => 'required',
                'special_needs_description' => 'required_if:special_needs,Yes',
                'family_income_loss' => 'required',
                'family_income_loss_description' => 'required_if:family_income_loss,Yes',
                'amount_applying' => 'required|numeric',
            ]);
        }
    }
    public function applybursary()
    {
        $this->resetErrorBag();
        if ($this->currentstep == 3) {
            $this->validate([
                'school_perfomance' => 'required|mimes:pdf, doc,docx, PDF|max:10080',
                'fee_structure' => 'required|mimes:pdf, doc,docx, PDF|max:10080',
                'special_needs_attachment' => 'nullable|mimes:pdf, doc,docx, PDF|max:10080',
                'relevant_attachment' => 'nullable|mimes:pdf, doc,docx, PDF|max:10080',
                'application_support' => 'required|string',
            ]);
        }
        $bursarylength = 6;
        $str = "1234567890";
        $bursaryid = substr(str_shuffle($str), 0, $bursarylength);
        $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
        $bursary = new ModelsBursaryApplication;
        $bursary->bursary_id = $bursaryid;
        $bursary->bursary_student_id = $student->id;
        $bursary->bursary_user_id = auth()->user()->id;
        $bursary->bursary_school_id = $student->school_id;
        $bursary->bursary_course_id = $student->course_id;
        $bursary->bursary_constituency_id = $student->constituency_id;
        $bursary->bursary_county_id = $student->county_id;
        $bursary->guardian_full_names = $this->guardian_full_names;
        $bursary->gender = $this->gender;
        $bursary->guardian_phone_number = $this->guardian_phone_number;
        $bursary->student_category = $this->student_category;
        $bursary->student_helb_status = $this->student_helb_status;
        $bursary->student_helb_status_decision = $this->student_helb_status_decision;
        $bursary->financial_assistance = $this->financial_assistance;
        $bursary->family_status = $this->family_status;
        $bursary->special_needs = $this->special_needs;
        $bursary->special_needs_description = $this->special_needs_description;
        $bursary->family_income_loss_description = $this->family_income_loss_description;
        $bursary->family_income_loss = $this->family_income_loss;
        $bursary->application_support = $this->application_support;
        $bursary->amount_applying = $this->amount_applying;
        $bursary->bursary_status = "applied";

        $fileNameWithExt = $this->fee_structure->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->fee_structure->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->fee_structure->storeAs('feestructure', $filenameToStore, 'public');
        $bursary->fee_structure = $filenameToStore;

        if ($this->special_needs_attachment !== null) {
            $fileNameWithExt = $this->special_needs_attachment->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $this->special_needs_attachment->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $this->special_needs_attachment->storeAs('specialneeds', $filenameToStore, 'public');
            $bursary->special_needs_attachment = $filenameToStore;
        }
        $fileNameWithExt = $this->school_perfomance->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->school_perfomance->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->school_perfomance->storeAs('schoolperfomance', $filenameToStore, 'public');
        $bursary->school_perfomance = $filenameToStore;

        if ($this->relevant_attachment !== null) {
            $fileNameWithExt = $this->relevant_attachment->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $this->relevant_attachment->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $this->relevant_attachment->storeAs('additionaldocuments', $filenameToStore, 'public');
            $bursary->relevant_attachment = $filenameToStore;
        }

        $bursary->save();
        Toastr::warning('Your Application submited successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('student');
    }
}
