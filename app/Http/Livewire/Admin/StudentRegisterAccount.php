<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;
use Livewire\WithFileUploads;

class StudentRegisterAccount extends Component
{
    use WithFileUploads;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $admission_number;
    public $date_of_birth;
    public $class_admited;
    public $profile_photo;
    public $email;
    public $gender;
    public $postal_code;
    public $postal_office;
    public $postal_address;

    public function render()
    {
        return view('livewire.admin.student-register-account');
    }
    protected $rules = [
        'first_name' => 'required|string|min:3',
        'middle_name' => 'required|string|min:3|max:50',
        'last_name' => 'required|string|min:3|max:50',
        'date_of_birth' => 'required',
        'admission_number' => 'required|integer|min:1|max:100000000|unique:students',
        'class_admited' => 'required',
        'profile_photo' => 'required|image|mimes:jpeg,jpg,png,gif,PNG,JPG,JPEG|max:4080',
        'email' => 'required|email|unique:users',
        'gender' => 'required',
        'postal_office' => 'required|integer',
        'postal_code' => 'required|integer',
        'postal_address' => 'required|string'
    ];
    public function createstudent()
    {

        $this->validate();
        $length = 32;
        $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $slag = substr(str_shuffle($string), $length);
        $fullnames = $this->first_name.' '.$this->middle_name.' '.$this->last_name;
        $student = new Student;
        $student->full_names =$fullnames;
        $student->dob = $this->date_of_birth;
        $student->gender = $this->gender;
        $student->class_admited = $this->class_admited;
        $student->admission_number = $this->admission_number;
        $student->email = $this->email;
        $student->slag = $slag;
        $student->users_id = 1;
        $student->postal_office = $this->postal_office;
        $student->postal_code = $this->postal_code;
        $student->postal_address = $this->postal_address;
        $fileNameWithExt = $this->profile_photo->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->profile_photo->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->profile_photo->storeAs('student_photos', $filenameToStore, 'public');
        $student->photo = $filenameToStore;
        $student->save();
        $student->attachRole("students");

        $user = new User;
        $user->name = $student->full_names;
        $user->email = $student->email;
        $user->password = bcrypt("12345678");
        $user->slag = $slag;
        $user->save();


        $completestudent = Student::findOrFail($student->id);
        $completestudent->users_id = $user->id;
        $completestudent->save();

        Toastr::warning('Student Details Added Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/student-admission/'.$this->admission_number.'/'.$slag);
    }
}
