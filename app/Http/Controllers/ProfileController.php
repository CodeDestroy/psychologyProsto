<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

    
    public function profile () {
        return view('profile.registerSecond');

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

    public function registerSecond(Request $request) 
    {
        /* snils: 123-123-123 12
        address: Воронеж 25 января 34а 70
        postIndex: 369852
        postIndex: 9005555555
        email: test@test.com
        birthDay: 2001-12-24
        isHealthyChild: isHealthyChild
        isLegal: isLegal
        isHealthyChild: 340734888697
        workPlace: г. Видное, ИП Побирская ЕА, ИНН 340734888697
        workPost: 123
        spetiality: 123
        tgNickname: 123
        passportSeria: 2022
        passpoortNumber: 123456
        passportPhoto: бусыгин.png */
        return $request;
    }

}
