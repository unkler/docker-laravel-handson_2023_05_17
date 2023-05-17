<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

require __DIR__.'/auth.php';

Route::get('/{any?}', function () {
    if (Auth::check()) {
        return view('app');
    } else {
        return redirect('/login');
    }
})->where('any', '.*');
