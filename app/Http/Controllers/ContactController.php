<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store()
    {
            $msg = request()->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required|min:3'
            ], [
            'name.required'     =>  'El campo nombre es obligatorio',
            'email.required'    =>  'Ingrese un correo valido',
            'message.required'  =>  'Ingrese un mensaje correcto'
            ]);

            Mail::to('darinelcigarroa97@gmail.com')->queue(new MessageReceived($msg));

            return 'datos validados';
    }
}
