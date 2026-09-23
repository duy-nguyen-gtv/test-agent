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
     * Store the contact submission in the logs.
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        Log::info('Contact form submission received.', $request->validated());

        return redirect()
            ->route('contacts')
            ->with('status', 'Your message has been sent.');
    }
}
