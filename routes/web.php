<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
    return view('Frontend.home');
})->name('home');

Route::get('/about-us', function () {
    return view('Frontend.about');
})->name('about');

Route::get('/events', function () {
    return view('Frontend.events');
})->name('events');

Route::get('/contact-us', function () {
    return view('Frontend.contact');
});

Route::get('/privacy-policy', function () {
    return view('Frontend.privacy-policy');
});

Route::get('/classes', function () {
    return view('Frontend.classes');
})->name('classes');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [SubscriptionController::class, 'subscribe']);

require __DIR__.'/auth.php';
