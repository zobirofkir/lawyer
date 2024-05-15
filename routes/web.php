<?php

use App\Http\Controllers\ApontmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Requests\ApointmentRequest;
use Illuminate\Support\Facades\Route;


Route::apiResource('/', ApontmentController::class);

Route::apiResource('/contacts', ContactController::class);

Route::get('pratique', function(){
    return view('practices.practice');
});

Route::get('propos', function(){
    return view('proposes.propos');
});

Route::get('Nouvelles-recentes', function(){
    return view('Jurisprudences.Jurisprudence');
});

Route::get('{locale}/home', [LanguageController::class, 'arabic'])->name('lang.switch');
Route::get('{locale}/contact', [LanguageController::class, 'arabicContact'])->name('lang.switch.contact');
Route::get('{locale}/Nouvelles-recentes', [LanguageController::class, 'arabicJurisprudences'])->name('lang.switch.recente');
Route::get('{locale}/practices', [LanguageController::class, 'arabicPractices'])->name('lang.switch.practices');
Route::get('{locale}/propos', [LanguageController::class, 'arabicPropos'])->name('lang.switch.propos');
