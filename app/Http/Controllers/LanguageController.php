<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{

    public function arabic($locale)
    {
        // Validate supported locales
        $supportedLocales = ['ar', 'en']; // Add more if needed

        // Check if locale is supported
        if (in_array($locale, $supportedLocales)) {
            // Set application locale
            App::setLocale($locale);

            // Store locale in a cookie
            session()->put('locale', $locale);
        }

        return view('translate.welcome'); 
    }

    public function arabicContact($locale)
    {
        // Validate supported locales
        $supportedLocales = ['ar', 'en']; // Add more if needed

        // Check if locale is supported
        if (in_array($locale, $supportedLocales)) {
            // Set application locale
            App::setLocale($locale);

            // Store locale in a cookie
            session()->put('locale', $locale);
        }

        return view('translate.contact'); // Redirect back to welcome view
    }

    public function arabicJurisprudences($locale)
    {
        // Validate supported locales
        $supportedLocales = ['ar', 'en']; // Add more if needed

        // Check if locale is supported
        if (in_array($locale, $supportedLocales)) {
            // Set application locale
            App::setLocale($locale);

            // Store locale in a cookie
            session()->put('locale', $locale);
        }

        return view('translate.jurisprudences'); // Redirect back to welcome view
    }

    public function arabicPractices($locale)
    {
        // Validate supported locales
        $supportedLocales = ['ar', 'en']; // Add more if needed

        // Check if locale is supported
        if (in_array($locale, $supportedLocales)) {
            // Set application locale
            App::setLocale($locale);

            // Store locale in a cookie
            session()->put('locale', $locale);
        }

        return view('translate.practice'); // Redirect back to welcome view
    }

    public function arabicPropos($locale)
    {
        // Validate supported locales
        $supportedLocales = ['ar', 'en']; // Add more if needed

        // Check if locale is supported
        if (in_array($locale, $supportedLocales)) {
            // Set application locale
            App::setLocale($locale);

            // Store locale in a cookie
            session()->put('locale', $locale);
        }

        return view('translate.propos'); // Redirect back to welcome view
    }

}


