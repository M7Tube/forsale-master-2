<?php

use App\Http\Controllers\Website\LoginController;
use Illuminate\Support\Facades\Route;
//f
Route::group(['as' => 'website.'], function () {//, 'prefix' => 'hehe']

    Route::view('homepage', 'Website.homepage')->name('homepage');
    Route::view('viewAds/category/{category}', 'Website.viewAds')->name('viewAds');
    Route::view('terms', 'Website.terms')->name('terms');
    Route::view('myads', 'Website.MyAds')->name('myads')->middleware('admin.auth');
    Route::view('myfavorite', 'Website.myfavorite')->name('myFavorite')->middleware('admin.auth');
    Route::view('contact-with-manger', 'Website.ContactWithManger')->name('contact-with-manger')->middleware('admin.auth');
    Route::view('my-wallet', 'Website.MyWallet')->name('my-wallet')->middleware('admin.auth');
    Route::view('add-new-ad', 'Website.AddNewAd')->name('add-new-ad')->middleware('admin.auth');
    Route::view('register', 'Website.register')->name('register');
    Route::view('forget_password', 'Website.forget_password')->name('forget_password');
    Route::view('confirm-register', 'Website.confirm-register')->name('confirm-register');
    Route::view('spcialAd', 'Website.spcialAd')->name('spcialAd');
    Route::view('login', 'Website.login')->name('login');
    Route::view('ad', 'Website.ad')->name('ad');
    Route::view('search', 'Website.search')->name('search');
    Route::view('test', 'Website.newwebsitelayout')->name('tetetet');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
