<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'web.crud.'], function () {

    //ROUTES OF CONTROL THE DATA (CONTROL PAGES)

    //MAIN DASHBOARD PAGE
    Route::view('/', 'Dashboard.dashboard')->name('dashboard');

    //PAGE FOR CONTROLE AREAS
    Route::view('areas', 'Dashboard.Area.index')->name('areas')
        ->middleware([
            'middleware' => 'permission:read_area|create_area|edit_area|delete_area'
        ]);
    //PAGE FOR CONTROLE neighborhood
    Route::view('neighborhood', 'Dashboard.Neighborhood.index')->name('neighborhood')
        ->middleware([
            'middleware' => 'permission:read_neighborhood|create_neighborhood|edit_neighborhood|delete_neighborhood'
        ]);
    //PAGE FOR CONTROLE adTypes
    Route::view('adTypes', 'Dashboard.adType')->name('adTypes')
        ->middleware([
            'middleware' => 'permission:read_ad_type|create_ad_type|edit_ad_type|delete_ad_type'
        ]);
    //PAGE FOR CONTROLE wallets
    Route::view('wallets', 'Dashboard.wallet.index')->name('wallets')
        ->middleware([
            'middleware' => 'permission:read_wallet|create_wallet|edit_wallet|delete_wallet'
        ]);
    //PAGE FOR CONTROLE CountryOfManufacture
    Route::view('CountryOfManufacture', 'Dashboard.CountryOfManufacture.index')->name('CountryOfManufacture')
        ->middleware([
            'middleware' => 'permission:read_country_of_manufacture|create_country_of_manufacture|edit_country_of_manufacture|delete_country_of_manufacture'
        ]);
    //PAGE FOR CONTROLE ContinentOfOrigin
    Route::view('RegionOfOrigin', 'Dashboard.Contianant.index')->name('ContinentOfOrigin')
        ->middleware([
            'middleware' => 'permission:read_continent_of_origin|create_continent_of_origin|edit_continent_of_origin|delete_continent_of_origin'
        ]);
    //PAGE FOR CONTROLE RentalTime
    Route::view('RentalTime', 'Dashboard.RentalTime.index')->name('RentalTime')
        ->middleware([
            'middleware' => 'permission:read_rental_time|create_rental_time|edit_rental_time|delete_rental_time'
        ]);
    //PAGE FOR CONTROLE ApartmentStatus
    Route::view('ApartmentStatus', 'Dashboard.ApartmentStatus.index')->name('ApartmentStatus')
        ->middleware([
            'middleware' => 'permission:read_apartment_status|create_apartment_status|edit_apartment_status|delete_apartment_status'
        ]);
    //PAGE FOR CONTROLE BuildingStatus
    Route::view('BuildingStatus', 'Dashboard.BuildingStatus.index')->name('BuildingStatus')
        ->middleware([
            'middleware' => 'permission:read_buildingStatus|create_buildingStatus|edit_buildingStatus|delete_buildingStatus'
        ]);
    //PAGE FOR CONTROLE CarStatus
    Route::view('CarStatus', 'Dashboard.CarStatus.index')->name('CarStatus')
        ->middleware([
            'middleware' => 'permission:read_car_status|create_car_status|edit_car_status|delete_car_status'
        ]);
    //PAGE FOR CONTROLE CarType
    Route::view('CarType', 'Dashboard.CarType.index')->name('CarType')
        ->middleware([
            'middleware' => 'permission:read_car_type|create_car_type|edit_car_type|delete_car_type'
        ]);
    //PAGE FOR CONTROLE CommercialAndArtificialType
    Route::view('CommercialAndArtificialType', 'Dashboard.CommercialAndArtificialType.index')->name('CommercialAndArtificialType')
        ->middleware([
            'middleware' => 'permission:read_commercial_and_artificial_type|create_commercial_and_artificial_type|edit_commercial_and_artificial_type|delete_commercial_and_artificial_type'
        ]);
    //PAGE FOR CONTROLE Jobs
    Route::view('Jobs', 'Dashboard.Jobs.index')->name('Jobs')
        ->middleware([
            'middleware' => 'permission:read_jobs|create_jobs|edit_jobs|delete_jobs'
        ]);
    //PAGE FOR CONTROLE Cars
    Route::view('Cars', 'Dashboard.Cars.index')->name('Cars')
        ->middleware([
            'middleware' => 'permission:read_cars|create_cars|edit_cars|delete_cars'
        ]);
    //PAGE FOR CONTROLE YearsOfExperience
    Route::view('YearsOfExperience', 'Dashboard.YearsOfExperience.index')->name('YearsOfExperience')
        ->middleware([
            'middleware' => 'permission:read_years_of_experience|create_years_of_experience|edit_years_of_experience|delete_years_of_experience'
        ]);
    //PAGE FOR CONTROLE PersonLangueges
    Route::view('PersonLangueges', 'Dashboard.PersonLangueges.index')->name('PersonLangueges')
        ->middleware([
            'middleware' => 'permission:read_person_langueges|create_person_langueges|edit_person_langueges|delete_person_langueges'
        ]);
    //PAGE FOR CONTROLE MotionVector
    Route::view('MotionVector', 'Dashboard.MotionVector.index')->name('MotionVector')
        ->middleware([
            'middleware' => 'permission:read_motion_vector|create_motion_vector|edit_motion_vector|delete_motion_vector'
        ]);
    //PAGE FOR CONTROLE AdStatus
    Route::view('AdStatus', 'Dashboard.AdStatus.index')->name('AdStatus')
        ->middleware([
            'middleware' => 'permission:read_ad_status|create_ad_status|edit_ad_status|delete_ad_status'
        ]);
    //PAGE FOR CONTROLE Admin Users
    Route::view('Users', 'Dashboard.Users.index')->name('Users')
        ->middleware([
            'middleware' => 'permission:read_users|edit_users|delete_users'
        ]);
    //PAGE FOR CONTROLE Web/App Personal Users
    Route::view('WebAppPersonalUsers', 'Dashboard.Users.WebAppindex')->name('WebAppPersonalUsers')
        ->middleware([
            'middleware' => 'permission:read_users|edit_users|delete_users'
        ]);
    //PAGE FOR CONTROLE Web/App Commercial Users
    Route::view('WebAppCommercialUsers', 'Dashboard.Users.WebAppindex2')->name('WebAppCommercialUsers')
        ->middleware([
            'middleware' => 'permission:read_users|edit_users|delete_users'
        ]);
    //PAGE FOR CONTROLE SpcialAd
    Route::view('AdminAd', 'Dashboard.spcialAd.index')->name('SpcialAd')
        ->middleware([
            'middleware' => 'permission:read_spcialAd|create_spcialAd|edit_spcialAd|delete_spcialAd'
        ]);
    //PAGE FOR CONTROLE Color
    Route::view('Color', 'Dashboard.Color.index')->name('Color')
        ->middleware([
            'middleware' => 'permission:read_color|create_color|edit_color|delete_color'
        ]);
    //PAGE FOR CONTROLE Governorates
    Route::view('Governorates', 'Dashboard.Governorates.index')->name('Governorates')
        ->middleware([
            'middleware' => 'permission:read_governorate|create_governorate|edit_governorate|delete_governorate'
        ]);
        //PAGE FOR CONTROLE Governorates
    Route::view('AppSettings', 'Dashboard.AppSettings.index')->name('AppSettings')
    ->middleware([
        'middleware' => 'permission:read_app_settings|create_app_settings|edit_app_settings|delete_app_settings'
    ]);
    //PAGE FOR CONTROLE Governorates
    Route::view('AcceptAds', 'Dashboard.AllAds.accept-all-ads')->name('AcceptAds')
        ->middleware([
            'middleware' => 'permission:edit_cars|edit_jobs|edit_real_estate'
        ]);
    //PAGE FOR CONTROLE Governorates
    Route::view('Statistics', 'Dashboard.AppSettings.Statistics')->name('Statistics')
        ->middleware([
            'middleware' => 'permission:read_app_settings'
        ]);
    //PAGE FOR SEND GENERAL Notification
    Route::view('SendNotification', 'Dashboard.Notification.send')->name('sendGeneralNoti');

    // GROUP FOR CREATE PAGES
    Route::group(['prefix' => 'create'], function () {
        //PAGE FOR CREATE NEW SPCIAL AD
        Route::view('spcialad', 'Dashboard.spcialAd.create')->name('create.spcialAd')
            ->middleware([
                'middleware' => 'permission:create_spcialAd'
            ]);
        //PAGE FOR CREATE
        //Route::view('category', 'Dashboard.Category.create')->name('create.category')
        //     ->middleware([
        //         'middleware' => 'permission:create_users'
        //     ]);
    });

    // GROUP FOR EDIT PAGES
    Route::group(['prefix' => 'edit'], function () {
        //PAGE FOR EDIT SPCIAL AD
        Route::view('spcialad', 'Dashboard.spcialAd.edit')->name('edit.spcialAd')
            ->middleware([
                'middleware' => 'permission:edit_spcialAd'
            ]);
        //PAGE FOR EDIT SPCIAL AD PICTURE
        Route::view('spcialadPicture', 'Dashboard.spcialAd.editPicture')->name('edit.spcialadPicture')
            ->middleware([
                'middleware' => 'permission:edit_spcialAd'
            ]);
    });

    // GROUP FOR MESSAGE WITH ADMINS (CONTACT WITH ADMIN IN MOBILE)
    Route::group(['prefix' => 'message', 'as' => 'web.message.'], function () {
        //PAGE FOR CHAT
        Route::view('chat', 'Dashboard.Messaging.chat')->name('chat');
    });
});
