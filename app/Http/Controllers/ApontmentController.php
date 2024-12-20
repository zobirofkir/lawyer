<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApointmentRequest;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactReceived;
use App\Models\Apointment;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApontmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(ApointmentRequest $request)
    {
       $apointment = Contact::create($request->validated());
        Mail::to('zobirofkir19@gmail.com')->send(new ContactReceived($apointment));
        return view('welcome');
    }
}
