<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AdminCalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin', 'verified']);
    }

    public function index(Request $request)
    {

        return view('admin.full-calendar');
    }
    public function allevents()
    {
        $events = Event::all();
        return view('admin.all-events', compact('events'));
    }
    public function dashboardfetchevents(){
        $events = Event::select('title', 'start','end')->get();
        return response()->json($events);
    }
    public function addevent()
    {
        return view('admin.add-event');
    }
    public function uploadaddevent(Request $request)
    {
        $this->validate($request, [
            'event_title' => 'required',
            'event_description' => 'required',
            'event_place' => 'required',
            'event_target' => 'required',
            'end_time' => 'required',
            'start_time' => 'required'
        ]);

        $newevent = new Event;
        $newevent->title = $request->input('event_title');
        $newevent->start = $request->input('start_time');
        $newevent->end = $request->input('end_time');
        $newevent->description = $request->input('event_description');
        $newevent->event_for = $request->input('event_target');
        $newevent->event_place = $request->input('event_place');
        $newevent->save();

        Toastr::warning('New Event has been added.', 'Event Added', ["positionClass" => "toast-top-right"]);

        return redirect('admin/all-events');
    }
}
