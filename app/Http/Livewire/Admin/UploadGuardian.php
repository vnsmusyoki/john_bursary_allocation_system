<?php

namespace App\Http\Livewire\Admin;

use App\Models\Guardian;
use App\Models\Student;
use App\Models\User;
use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;

class UploadGuardian extends Component
{
    public $guardian_names;
    public $email;
    public $phone_number;
    public $admission_number;
    public $student_slag;
    public function render()
    {
        return view('livewire.admin.upload-guardian');
    }
    protected $rules = [
        'guardian_names' => 'required|string|min:10',
        'email' => 'required|email|unique:users',
        'phone_number' => 'required|digits:10|unique:guardians'
    ];
    public function mount($admission_number, $student_slag)
    {

        $this->admission_number = $admission_number;
        $this->student_slag = $student_slag;
    }
    public function uploadguardian()
    {

        $this->validate();
        $student = Student::where(['admission_number' => $this->admission_number, 'slag' => $this->student_slag])->first();
        $guardian = new Guardian;
        $guardian->students_id = $student->id;
        $guardian->users_id = $student->id;
        $guardian->category = "Guardian";
        $guardian->phone_number = $this->phone_number;
        $guardian->status = "Alive";
        $guardian->save();

        $user = new User;
        $user->name = $this->guardian_names;
        $user->email = $this->email;
        $user->slag = "jkjdjdkjfjijrjjfrijfrijfrifjrifjrfirk";
        $user->password = bcrypt("12345678");
        $user->save();
        $user->attachRole("parent");


        $completeguardian = Guardian::findorFail($guardian->id);
        $completeguardian->users_id = $user->id;
        $completeguardian->save();

        Toastr::warning('Guardian Details Added Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('managestudents.index');
    }
}
