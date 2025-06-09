<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
     
        $events = Event::where('is_active', true)->latest()->get();

        
        return view('events-list', ['events' => $events]);
    }
}