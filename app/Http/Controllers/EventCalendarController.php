<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\EventCalendar;

class EventCalendarController extends Controller
{
    public function index(){

        // $all_events = EventCalendar::all();

        // $events = [];

        // foreach ($all_events as $event) {
        //     $events[] = [
        //         'title' => $event->title,
        //         'start' => $event->start,
        //         'end' => $event->end,
        //     ];
        // }

        return view('calendar.index');
    }
}
