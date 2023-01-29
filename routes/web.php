<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use App\Mail\DisscountOffer;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::resource('posts',PostsController::class);

Route::post('/posts/{post}/comments', [CommentsController::class , 'store']);




Route::get('/signup/{lang}',function ($lang) {
    App::setLocale($lang);
    return view('signup');
});

Route::post('/mail', function () {
    $email = request()->validate([
        'email' => 'required|email'
    ]);
    Mail::to($email)->send(new DisscountOffer());
    return back();
});