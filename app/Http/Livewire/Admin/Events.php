<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Events extends Component
{
    public $event_title;
    public $event_description;
    public $event_place;
    public $start_time;
    public $end_time;
    public $event_for;

    protected $rules = [
        'event_title' => 'required',
        'event_description' => 'required',
        'event_place' => 'required',
        'event_for' => 'required',
        'end_time' => 'required',
        'start_time' => 'required'
    ];
    public function render()
    {
        return view('livewire.admin.events');
    }

    public function addeventnow()
    {
        $this->validate();

    }
}
