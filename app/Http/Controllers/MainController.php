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
            if($request->has('phone')) {
                // set timezone
                date_default_timezone_set('Asia/Krasnoyarsk');
                // get phone
                $phone = $request->input('phone');
                // data for email
                $data = [
                    'phone' => $phone,
                    'time' => date(DATE_RFC822)
                ];
                // send info email
                Mail::send('mail.phone', ['data' => $data], function($message) use ($data) {
                    $mail_admin = env('MAIL_ADMIN');
                    $message->from( 'ticket@service-helper.ru', 'Новый тикет - ремонт компьютеров');
                    $message->to($mail_admin, 'Оператору компьютерной помощи')
                        ->subject('Тема: Новая заявка на ремонт компьютерной техники');
                });
            }
        }
    }}
