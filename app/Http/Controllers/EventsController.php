<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function events()
    {
        $events = Event::all();
        return view('welcome',compact('events'));

    }
}
