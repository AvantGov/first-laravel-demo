<?php

use Illuminate\Support\Facades\Route;
use Illuminat\Support\Arr;
use App\Models\Jobs;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Jobs::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Jobs::find($id)
    ]);
});

Route::get('/contact', function() {
    return view('contact');
});
