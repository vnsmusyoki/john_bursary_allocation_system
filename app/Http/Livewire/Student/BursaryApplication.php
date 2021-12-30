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
                'special_needs_attachment' => 'required_if:special_needs,Yes|mimes:pdf, doc,docx, PDF|max:10080',
                'relevant_attachment' => 'nullable|mimes:pdf, doc,docx, PDF|max:10080',
                'application_support' => 'required|string',
            ]);
        }

        $bursary = new ModelsBursaryApplication;
        $bursary->
        Toastr::warning('Teacher Details Added Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/all-teachers/');
    }
}
