<?php

use App\Http\Controllers\CamionsController;
use App\Http\Controllers\ConducteursController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::controller(ConducteursController::class)->group(function () {
    Route::get('/conducteurs', 'index')->name('conducteurs_index');
    Route::get('/conducteurs/create', 'create')->name('conducteurs_create');
    Route::post('/conducteurs/store', 'store')->name('conducteurs_store');
    Route::get('/conducteurs/{id}', 'show')->name('conducteurs_show');
    Route::get('/conducteurs/edit/{id}', 'edit')->name('conducteurs_edit');
    Route::post('/conducteurs/update/{id}', 'update')->name('conducteurs_update');
    Route::get('/conducteurs/destroy/{id}', 'destroy')->name('conducteurs_destroy');
});

Route::controller(CamionsController::class)->group(function () {
    Route::get('/camions', 'index')->name('camions_index');
    Route::get('/camions/create', 'create')->name('camions_create');
    Route::post('/camions/store', 'store')->name('camions_store');
    Route::get('/camions/{id}', 'show')->name('camions_show');
    Route::get('/camions/edit/{id}', 'edit')->name('camions_edit');
    Route::post('/camions/update/{id}', 'update')->name('camions_update');
    Route::get('/camions/destroy/{id}', 'destroy')->name('camions_destroy');
});

Route::controller(DestinationsController::class)->group(function () {
    Route::get('/destinations', 'index')->name('destinations_index');
    Route::get('/destinations/create', 'create')->name('destinations_create');
    Route::post('/destinations/store', 'store')->name('destinations_store');
    Route::get('/destinations/{id}', 'show')->name('destinations_show');
    Route::get('/destinations/edit/{id}', 'edit')->name('destinations_edit');
    Route::post('/destinations/update/{id}', 'update')->name('destinations_update');
    Route::get('/destinations/destroy/{id}', 'destroy')->name('destinations_destroy');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard_index');
    Route::post('/dashboard/store', 'store')->name('dashboard_store');
    Route::get('/dashboard/{id}', 'show')->name('dashboard_show');
    Route::get('/dashboard/edit/{id}', 'annule')->name('dashboard_annule');
    Route::get('/dashboard/update/{id}', 'complete')->name('dashboard_complete');
});