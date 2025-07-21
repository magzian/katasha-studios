<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmissionMail;

class SubmitContactFormController extends Controller
{
     public function __invoke(Request $request){

        /* dd($request->all()); */

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $formSubmission = ContactFormSubmission::create($validated);

        Mail::to(env('CONTACT_FORM_EMAIL', 'default@email.com'))->queue(new ContactFormSubmissionMail($formSubmission));

}
}