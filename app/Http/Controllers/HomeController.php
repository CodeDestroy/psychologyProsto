<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* $date = date("Y-m-d");
        $events = Event::whereDate('start_date', $date)
                ->orderBy('start_time')
                ->get(); */
        /* $events = Event::orderBy('start_date')->orderBy('start_time')->get(); */
        return view('home');
    }

    public function contacts() 
    {
        return view('contacts');
    }

    public function about() 
    {
        return view('about');
    }

    
}
