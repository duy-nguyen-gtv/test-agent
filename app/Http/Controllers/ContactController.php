<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     */
    public function create(): View
    {
        return view('contact');
    }

    /**
     * Log the contact message and redirect back to the form.
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        Log::info('Contact form submitted.', $request->validated());

        return redirect()->route('contact')->with('status', 'Message sent successfully.');
    }
}
