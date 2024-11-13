<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CourseRegistration;
use App\Models\CourseRegistrationDocuments;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

        $user = User::find($request->user()->id);

        $validator = Validator::make($request->all(), [
            'snils' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'postIndex' => 'nullable|string|max:6',
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) use ($user) {
                    if ($value !== $user->email) {
                        $fail('Email не совпадает с email текущего пользователя.');
                    }
                },
            ],/* 
            'phone' => 'nullable|string|regex:/^\+7[0-9]{10}$/', */
            'birthDay' => 'nullable|date',
            'workPlace' => 'nullable|string|max:255',
            'workPost' => 'nullable|string|max:255',
            'spetiality' => 'nullable|string|max:255',
            'tgNickname' => 'nullable|string|max:50',
            'passportSeria' => 'nullable|string|size:4',
            'passpoortNumber' => 'nullable|string|size:6',
            'passportPhoto' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Удаление пробелов и тире из snils, phone и postIndex
        $snils = preg_replace('/[\s\-]/', '', $request->input('snils'));
        $phone = preg_replace('/[\s\-]/', '', $request->input('phone'));
        $postIndex = preg_replace('/[\s\-]/', '', $request->input('postIndex'));
        // Сохранение фотографий и формирование массива с путями к ним
        $photoPaths = [];
        if ($request->hasFile('passportPhoto')) {
            foreach ($request->file('passportPhoto') as $photo) {
                // Сохранение фото в папку "passport_photos"
                $path = $photo->store('passport_photos', 'public');
                $photoPaths[] = $path;
            }
        }
        // Обновление данных пользователя
        
        $shouldBeCheckedOut = false;
        if ($request->input('isHealthyChild') || $request->input('isStudent') || $request->input('isAPPCP'))
            $shouldBeCheckedOut = true;
        $courseRegistration = CourseRegistration::create([
            'user_id' => $user->id,
            'isHealthyChild' => $request->input('isHealthyChild'),
            'isStudent' => $request->input('isStudent'),
            'isAPPCP' => $request->input('isAPPCP'),
            'isLegal' => $request->input('isLegal'),
            'shouldBeCheckedOut' => $shouldBeCheckedOut
        ]);

        // Сохранение фотографий и формирование массива с путями к ним
        if ($request->hasFile('passportPhoto')) {
            foreach ($request->file('passportPhoto') as $photo) {
                // Сохранение фото в папку "passport_photos"
                $path = $photo->store('passport_photos', options: 'public');
                CourseRegistrationDocuments::create([
                    'courseRegistrationId' => $courseRegistration->id, // ID регистрации курса
                    'type' => 'passport',
                    'file' => $path,
                ]);
            }
        }
        $user->update([
            'SNILS' => $snils,
            'address' => $request->input('address'),
            'postIndex' => $postIndex,
            'email' => $request->input('email'),
            'phone' => $phone,
            'birthday' => $request->input('birthDay'),
            'workPlace' => $request->input('workPlace'),
            'workPost' => $request->input('workPost'),
            'spetiality' => $request->input('spetiality'),
            'tgNickname' => $request->input('tgNickname'),
            'passportSeria' => $request->input('passportSeria'),
            'passpoortNumber' => $request->input('passpoortNumber'),
            
        ]);
    
        return response()->json(['message' => 'Вы успешно зарегистрировались.'], 200);
    }

}
