<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApointmentRequest;
use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

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

    public function arStore(ApointmentRequest $request)
    {
       $apointment = Contact::create($request->validated());
        Mail::to('zobirofkir19@gmail.com')->send(new ContactReceived($apointment));
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

    /*
        Create English Translation
    */

    public function english($locale)
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

        return view('translate.en.welcome'); 
    }

    public function englishContact($locale)
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

        return view('translate.en.contact'); // Redirect back to welcome view
    }

    public function englishJurisprudences($locale)
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

        return view('translate.en.jurisprudences'); // Redirect back to welcome view
    }

    public function englishPractices($locale)
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

        return view('translate.en.practice'); // Redirect back to welcome view
    }

    public function englishPropos($locale)
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

        return view('translate.en.propos'); // Redirect back to welcome view
    }


}


