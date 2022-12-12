<?php

use App\Http\Controllers\Website\LoginController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//REDIRECT TO HOMEPAGE OF THE WEBSITE
Route::redirect('/', '/' . app()->getLocale() . '/homepage');

//PREFIX THE ROUTE WITH LANGUAGE PARAMETER
Route::group(['prefix' => '{language}'], function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    // ROUTE OF WASEETCOM DASHBOARD
    require __DIR__ . '/dashboard/dashboard.php';


    //ROUTE FOR WASEETCOM WEBSITE
    require __DIR__ . '/website/website.php';
    //Non Livewire Route
    Route::post('NonLivewirelogin', [LoginController::class, 'NonLivewirelogin'])->name('website.NonLivewirelogin');
    Route::get('changLang', function (Request $request) {
        if (app()->getLocale() == 'ar') {
            return redirect(str_replace("/ar/", "/en/", $_SERVER['HTTP_REFERER']));
        } else if (app()->getLocale() == 'en') {
            return redirect(str_replace("/en/", "/ar/", $_SERVER['HTTP_REFERER']));
        }
    })->name('website.changLang');
});
//ROUTE FOR WASEETCOM Auth
require __DIR__ . '/auth.php';
