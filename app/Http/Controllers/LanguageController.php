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
        return view('translate.contact');
    }

    public function arabicPublications()
    {
        return view('translate.publications');
    }

    public function arabicExperiences()
    {
        return view('translate.experiences');
    }

    public function arabicPropos()
    {
        return view('translate.propos');
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
        return view('translate.en.contact');
    }

    public function englishPublications()
    {
        return view('translate.en.publications');
    }

    public function englishExperiences()
    {
        return view('translate.en.experiences');
    }

    public function englishPropos()
    {
        return view('translate.en.propos');
    }

}


