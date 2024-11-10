<?php

use App\Http\Controllers\ApontmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Requests\ApointmentRequest;
use Illuminate\Support\Facades\Route;


Route::apiResource('/', ApontmentController::class);


Route::apiResource('/contacts', ContactController::class);

Route::get('/experiences', [LanguageController::class, 'experiences']);
Route::get('/propos', [LanguageController::class, 'propos']);
Route::get('/publications', [LanguageController::class, 'publications']);

// 

Route::get('ar/home', [LanguageController::class, 'arabic'])->name('lang.switch');
Route::get('ar/contact', [LanguageController::class, 'arabicContact'])->name('lang.switch.contact');
Route::get('ar/publications', [LanguageController::class, 'arabicPublications'])->name('lang.switch.recente');
Route::get('ar/blogs', [LanguageController::class, 'arabicBlogs'])->name('lang.switch.recente');
Route::get('ar/experiences', [LanguageController::class, 'arabicExperiences'])->name('lang.switch.experiences');
Route::get('ar/propos', [LanguageController::class, 'arabicPropos'])->name('lang.switch.propos');




Route::get('en/welcome', [LanguageController::class, 'english'])->name('lang.switch');
Route::get('en/contact', [LanguageController::class, 'englishContact'])->name('lang.switch.contact');
Route::get('en/publications', [LanguageController::class, 'englishPublications'])->name('lang.switch.recente');
Route::get('en/experiences', [LanguageController::class, 'englishExperiences'])->name('lang.switch.experiences');
Route::get('en/about', [LanguageController::class, 'englishPropos'])->name('lang.switch.propos');


Route::apiResource("blogs", BlogController::class)->except(["show"]);
Route::get("blogs/{blog:slug}", [BlogController::class, "show"])->name("blogs.show");


Route::post('/blog/{slug}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');