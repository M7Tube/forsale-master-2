<?php

use App\Http\Controllers\API\AdController;
use App\Http\Controllers\API\AddNewAd\AddNewAdController;
use App\Http\Controllers\API\AdStatusController;
use App\Http\Controllers\API\AdTypeController;
use App\Http\Controllers\API\ApiFilterController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FilterController;
use App\Http\Controllers\API\FilterTypeController;
use App\Http\Controllers\API\GovernorateController;
use App\Http\Controllers\API\INVOKABLE\CategoryPageController;
use App\Http\Controllers\API\INVOKABLE\HomePageController;
use App\Http\Controllers\API\MainCategoryController;
use App\Http\Controllers\API\NotifcationController;
use App\Http\Controllers\API\RateController;
use App\Http\Controllers\API\SpicalAdController;
use App\Http\Controllers\API\SpicalAPIController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\WalletController;
use App\Http\Controllers\MessageController;
use App\Http\Resources\API\FavoriteResource;
use App\Mail\Code;
use App\Models\AccountType;
use App\Models\Ad;
use App\Models\AppSettings;
use App\Models\Favorite;
use App\Models\LandType;
use App\Models\MainCategory;
use App\Models\RentalTime;
use App\Models\SpcialAd;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Kutia\Larafirebase\Facades\Larafirebase;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/ //

//protected Route
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['as' => 'Auth.'], function () {
        //for get the Ad of spcific user
        Route::get('MyAd/lang/{lang}/perpage/{perpage}', [SpicalAPIController::class, 'MyAd'])->name('MyAd');
        //for rating spcific Ad
        Route::post('Rate', [SpicalAPIController::class, 'Rate'])->name('Rate');
        //for get the user wallet info
        Route::get('MyWallet', [WalletController::class, 'MyWallet'])->name('MyWallet');
        //for get the user favorite
        Route::get('MyFavorite/lang/{lang}/perpage/{perpage}', [SpicalAPIController::class, 'MyFavorite'])->name('MyFavorite');
        //for add new AD to favorite list
        Route::post('AddToFavorite', [SpicalAPIController::class, 'AddToFavorite'])->name('AddToFavorite');
        //for logout the user
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        //for get the user notifiction **NEED TO BE EDIT**
        Route::post('MyNotification', [SpicalAPIController::class, 'MyNotification'])->name('MyNotification');
        //for get the add ad info to select from
        Route::get('getAddNewAdInfo/lang/{lang}/category/{category}', [AddNewAdController::class, 'getAddNewAdInfo'])->name('getAddNewAdInfo');
        //for add new ad to the app ! done !
        Route::post('AddNewAd/category/{category}', [AddNewAdController::class, 'AddNewAd'])->name('AddNewAd');
        //api for contact with manger(chat system) pages
        Route::group(['as' => 'Auth.AdminMessage'], function () {
            //for send new message
            Route::post('sendMessage', [MessageController::class, 'sendMessage'])->name('sendMessage');
            //for get the user messages history
            Route::post('receiveMessage', [MessageController::class, 'receiveMessage'])->name('receiveMessage');
        });
    });
});
//fsda

//unProtected Route
Route::group(['as' => 'noAuth.'], function () {
    //for homepage
    Route::get('homepage', HomePageController::class)->name('homepage');
    //for view ads page
    Route::get('viewads/lang/{lang}/perpage/{per_page}/category/{category}', [ApiFilterController::class, 'view'])->name('viewads');
    //for view spcific ad
    Route::get('ad/lang/{lang}/category/{category}/adid/{adid}/user/{user_id?}', [SpicalAPIController::class, 'showAd'])->name('SingleAd');
    //for show spcific spcial ad
    Route::get('spcialAd/{id}', [SpicalAPIController::class, 'spcialAd'])->name('spcialAd');
    //for search in main page **MYBE NEED TO BE EDITED**
    Route::get('search/lang/{lang}', [SpicalAPIController::class, 'search'])->name('search');
    //for get the terms and conditions5
    Route::get('terms', [SpicalAPIController::class, 'terms'])->name('terms');
    //for register new user
    Route::post('register', [AuthController::class, 'register'])->name('register');
    //for check the code that user enter if it is correct
    Route::post('check', [AuthController::class, 'check'])->name('check');
    //for login the user
    Route::post('login', [AuthController::class, 'login'])->name('login');
    //for save the FireBase token in the database for using it in The push notifiction method
    Route::post('savefcmtoken', [AuthController::class, 'savefcmtoken'])->name('savefcmtoken');
    //for send email to reset password
    Route::post('forget-password', [AuthController::class, 'forget_password'])->name('forget_password');
    //for check code form email of reset password
    Route::post('check-forget-password-code', [AuthController::class, 'check_forget_password_code'])->name('check_forget_password_code');
    //for reset password
    Route::post('api-reset-password', [AuthController::class, 'reset_password'])->name('api-reset-password');
});


Route::get('test', function (Request $request) {
    // if(session()->has('WebLoggedIn')){
    //     return true;
    // }
    // return ;

    // return FavoriteResource::collection($data);
})->middleware('auth:sanctum');

//for clear cache in Hosting **NEED TO BE DELETE**
Route::get('/clear', function () {
    Artisan::call('optimize:clear');
});
Route::get('testimage', [SpicalAPIController::class, 'testimage']);
//for migrate and seed the database in Hosting **NEED TO BE DELETE**
Route::get('/migrate', function () {
    Artisan::call('migrate:refresh --seed');
    return 'Done !';
});
