<?php

namespace App\Http\Livewire\Admin;

use App\Models\Guardian;
use App\Models\Student;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Livewire\Component;

class UploadMother extends Component
{
    public $mother_names;
    public $email;
    public $phone_number;
    public $mother_status;
    public $admission_number;
    public $student_slag;

    protected $rules = [
        'mother_names' => 'required|string|min:10',
        'email' => 'required|email|unique:users',
        'phone_number' => 'required|digits:10|unique:guardians',
        'mother_status' => 'required'
    ];
    public function render()
    {
        return view('livewire.admin.upload-mother');
    }
    public function mount($admission_number, $student_slag)
    {

        $this->admission_number = $admission_number;
        $this->student_slag = $student_slag;
    }
    public function uploadmother()
    {

        $this->validate();
        $student = Student::where(['admission_number' => $this->admission_number, 'slag' => $this->student_slag])->first();
        $guardian = new Guardian;
        $guardian->students_id = $student->id;
        $guardian->users_id = $student->id;
        $guardian->category = "Mother";
        $guardian->phone_number = $this->phone_number;
        $guardian->status = $this->mother_status;
        $guardian->save();

        $user = new User;
        $user->name = $this->mother_names;
        $user->email = $this->email;
        $user->slag = "jkjdjdkjfjijrjjfrijfrijfrifjrifjrfirk";
        $user->password = bcrypt("12345678");
        $user->save();
        $user->attachRole("parent");


        $completeguardian = Guardian::findorFail($guardian->id);
        $completeguardian->users_id = $user->id;
        $completeguardian->save();

        Toastr::warning('Mother Details Added Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/upload-guardian/' . $this->admission_number . '/' . $this->student_slag);
    }
}
