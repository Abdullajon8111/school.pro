<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::crud('a-school', 'ASchoolCrudController');
    Route::crud('a-school-class', 'ASchoolClassCrudController');
    Route::crud('s-class', 'SClassCrudController');
    Route::crud('s-district', 'SDistrictCrudController');
    Route::crud('s-in-turn', 'SInTurnCrudController');
    Route::crud('s-koef', 'SKoefCrudController');
    Route::crud('s-language-type', 'SLanguageTypeCrudController');
    Route::crud('s-location-type', 'SLocationTypeCrudController');
    Route::crud('s-province', 'SProvinceCrudController');
    Route::crud('s-school-status', 'SSchoolStatusCrudController');
    Route::crud('s-school-type', 'SSchoolTypeCrudController');
    Route::crud('s-subject', 'SSubjectCrudController');
    Route::crud('s-type-foreign-language', 'STypeForeignLanguageCrudController');
}); // this should be the absolute last line of this file