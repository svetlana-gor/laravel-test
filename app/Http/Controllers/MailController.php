<?php

namespace App\Http\Controllers;

use App\Mail\MailFromContactPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_form(Request $request)
    {
    	$email = $request->email;
    	$msg = $request->msg;

    	Mail::to('newappmailtrap@gmail.com')->send(new MailFromContactPage($email, $msg));

    	return redirect()->back()->with('message',"Your message has been sent!");
    }
}
