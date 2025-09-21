<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Mail::to($request->email)->send(new SubscriptionConfirmation());

        return back()->with('success', 'Thank you for subscribing!');
    }
}
