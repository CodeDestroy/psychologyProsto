<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile.general');
    }

    public function security()
    {
        return view('profile.security');
    }

    public function education() 
    {
        return view('profile.education');
    }

    public function setWhatsApp(Request $request)//: RedirectResponse
    {   
        /* return $request->input('hasWhatsApp'); */
        $user = User::find($request->user()->id);
        $user->hasWhatsApp = !($request->input('hasWhatsApp'));
        $user->save();
        return redirect('/profile');
    }

    public function setTgNickname (Request $request)//: RedirectResponse
    {   
        $user = User::find($request->user()->id);
        $user->tgNickname = $request->input('tgNickname');
        $user->save();
        return redirect('/profile');
    }

    public function setEmail (Request $request)//: RedirectResponse
    {   
        $user = User::find($request->user()->id);
        $user->email = $request->input('email');
        $user->save();
        return redirect('/profile');
    }

    public function setName (Request $request)//: RedirectResponse
    {   
        $user = User::find($request->user()->id);
        $user->name = $request->input('name');
        $user->save();
        return redirect('/profile');
    }

    public function setSecondName (Request $request)//: RedirectResponse
    {   
        $user = User::find($request->user()->id);
        $user->secondName = $request->input('secondName');
        $user->save();
        return redirect('/profile');
    }

    public function setPatronymicName (Request $request)//: RedirectResponse
    {   
        $user = User::find($request->user()->id);
        $user->patronymicName = $request->input('patronymicName');
        $user->save();
        return redirect('/profile');
    }
    public function setPhone (Request $request)//: RedirectResponse
    {   
        $user = User::find($request->user()->id);
        $user->phone = $request->input('phone');
        $user->save();
        return redirect('/profile');
    }
}
