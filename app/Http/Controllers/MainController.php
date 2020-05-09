<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail as Mail;
use Illuminate\Support\Facades\DB as DB;

class MainController extends Controller
{
    public function index(Request $request) {
        $phone = [
            'preview' => env('PREVIEW_PHONE'),
            'call' => env('CALL_PHONE')
        ];

        return view('index', compact('phone'));
    }

    public function sendMail(Request $request) {
        if($request->isMethod('post')) {
            Mail::send('mail', [], function($message)
            {
                $message->to('proffzvezdunoff@yandex.ru'
                     , 'Менеджеру') ->subject('Тема: Новая заявка');
                     $message->from('proffzvezdunoff@yandex.ru', 'Заявка с сайта');
            });
        };
    }
}

