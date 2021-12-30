<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;

class BursaryApplication extends Component
{
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
    public $family_income_loss;



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
        }
    }
    public function applybursary()
    {
    }
}
