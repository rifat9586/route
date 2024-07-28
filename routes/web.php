<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/Contact', function () {
    return view('Contact');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/technicians', function () {
    return view('technicians');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/404', function () {
    return view('404');
});