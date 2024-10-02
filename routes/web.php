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

// 

Route::get('ar/home', [LanguageController::class, 'arabic'])->name('lang.switch');
Route::get('ar/contact', [LanguageController::class, 'arabicContact'])->name('lang.switch.contact');
Route::get('ar/Nouvelles-recentes', [LanguageController::class, 'arabicJurisprudences'])->name('lang.switch.recente');
Route::get('ar/practices', [LanguageController::class, 'arabicPractices'])->name('lang.switch.practices');
Route::get('ar/propos', [LanguageController::class, 'arabicPropos'])->name('lang.switch.propos');




Route::get('en/welcome', [LanguageController::class, 'english'])->name('lang.switch');
Route::get('en/contacte', [LanguageController::class, 'englishContact'])->name('lang.switch.contact');
Route::get('en/Recent-News', [LanguageController::class, 'englishJurisprudences'])->name('lang.switch.recente');
Route::get('en/practice', [LanguageController::class, 'englishPractices'])->name('lang.switch.practices');
Route::get('en/about', [LanguageController::class, 'englishPropos'])->name('lang.switch.propos');
