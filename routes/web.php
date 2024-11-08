<?php

use App\Http\Controllers\ApontmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Requests\ApointmentRequest;
use Illuminate\Support\Facades\Route;


Route::apiResource('/', ApontmentController::class);


Route::apiResource('/contacts', ContactController::class);

Route::get('/experiences', function(){
    return view('experiences.experience');
});

Route::get('propos', function(){
    return view('proposes.propos');
});

Route::get('/publications', function(){
    return view('publications.publication');
});

// 

Route::get('ar/home', [LanguageController::class, 'arabic'])->name('lang.switch');
Route::get('ar/contact', [LanguageController::class, 'arabicContact'])->name('lang.switch.contact');
Route::get('ar/publications', [LanguageController::class, 'arabicPublications'])->name('lang.switch.recente');
Route::get('ar/experiences', [LanguageController::class, 'arabicExperiences'])->name('lang.switch.experiences');
Route::get('ar/propos', [LanguageController::class, 'arabicPropos'])->name('lang.switch.propos');




Route::get('en/welcome', [LanguageController::class, 'english'])->name('lang.switch');
Route::get('en/contact', [LanguageController::class, 'englishContact'])->name('lang.switch.contact');
Route::get('en/publications', [LanguageController::class, 'englishPublications'])->name('lang.switch.recente');
Route::get('en/experiences', [LanguageController::class, 'englishExperiences'])->name('lang.switch.experiences');
Route::get('en/about', [LanguageController::class, 'englishPropos'])->name('lang.switch.propos');
