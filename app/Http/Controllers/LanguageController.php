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

    public function arabic()
    {
        return view('translate.welcome'); 
    }

    public function arStore(ApointmentRequest $request)
    {
       $apointment = Contact::create($request->validated());
        Mail::to('zobirofkir19@gmail.com')->send(new ContactReceived($apointment));
        return view('translate.welcome');
    }


    public function arabicContact()
    {
        return view('translate.contact'); // Redirect back to welcome view
    }

    public function arabicJurisprudences()
    {
        return view('translate.jurisprudences'); // Redirect back to welcome view
    }

    public function arabicPractices()
    {
        return view('translate.practice'); // Redirect back to welcome view
    }

    public function arabicPropos()
    {
        return view('translate.propos'); // Redirect back to welcome view
    }

    /*
        Create English Translation
    */

    
    public function english()
    {
        return view('translate.en.welcome'); 
    }

    public function englishContact()
    {
        return view('translate.en.contact'); // Redirect back to welcome view
    }

    public function englishJurisprudences()
    {
        return view('translate.en.Jurisprudence'); // Redirect back to welcome view
    }

    public function englishPractices()
    {
        return view('translate.en.practice'); // Redirect back to welcome view
    }

    public function englishPropos()
    {
        return view('translate.en.propos'); // Redirect back to welcome view
    }

}


