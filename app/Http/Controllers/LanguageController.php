<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApointmentRequest;
use App\Mail\ContactReceived;
use App\Models\Contact;
use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class LanguageController extends Controller
{
    /**
     * Create English Translation
     */
    public function experiences()
    {
        return view('experiences.experiences');
    }

    public function propos()
    {
        return view('proposes.propos');
    }

    public function publications()
    {
        $pdfs = Pdf::all();
        return view('publications.publication', compact('pdfs'));
    }
    
    /**
     * Create Arabic Translation
     */
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
        $pdfs = Pdf::all();
        return view('translate.publications', compact('pdfs'));
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
        $pdfs = Pdf::all();

        return view('translate.en.publications', compact('pdfs'));
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


