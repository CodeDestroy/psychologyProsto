<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        return view('payment');
    }

    public function success(Request $request)//: RedirectResponse
    {   
        // Проверка подписи (для подтверждения подлинности ответа)
        $signature = $request->input('SignatureValue');
        $isValid = $this->validateSignature($request->all(), $signature);

        if ($isValid) {
            // Здесь можно обновить статус платежа в БД
            // Например, найти заказ по ID и отметить как оплаченный

            return redirect()->route('dashboard')->with('success', 'Оплата прошла успешно!');
        } else {
            return redirect()->route('dashboard')->with('error', 'Ошибка подтверждения оплаты.');
        }
        return redirect('/profile');
    }

    public function fail(Request $request)
    {
        return redirect()->route('dashboard')->with('error', 'Оплата не прошла. Попробуйте ещё раз.');
    }

    // Валидация подписи ответа
    private function validateSignature($data, $signature)
    {
        $merchantPass2 = config('services.robokassa.pass2'); // Пароль #2 из настроек Robokassa

        $expectedSignature = md5("{$data['OutSum']}:{$data['InvId']}:$merchantPass2");

        return strtoupper($expectedSignature) === strtoupper($signature);
    }
}
