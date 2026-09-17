<?php

use Illuminate\Support\Facades\Log;

describe('create', function () {
    it('renders the contact form with the name, email, and message fields', function () {
        $response = $this->get(route('contact'));

        $response->assertOk();
        $response->assertSee('Contact us');
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="message"', false);
        $response->assertSee('action="'.route('contact.store').'"', false);
    });
});

describe('store', function () {
    it('logs the message and redirects back to the contact form', function () {
        Log::spy();

        $response = $this->from(route('contact'))->post(route('contact.store'), [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'message' => 'Hello there!',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('status', 'Message sent successfully.');
        Log::shouldHaveReceived('info')->once()->with('Contact form submitted.', [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'message' => 'Hello there!',
        ]);
    });

    it('rejects an empty payload with all required field errors', function () {
        $response = $this->post(route('contact.store'), []);

        $response->assertInvalid([
            'name' => 'The name field is required.',
            'email' => 'The email field is required.',
            'message' => 'The message field is required.',
        ]);
    });

    it('rejects an invalid email format', function () {
        $response = $this->post(route('contact.store'), [
            'name' => 'Ada Lovelace',
            'email' => 'not-an-email',
            'message' => 'Hello there!',
        ]);

        $response->assertInvalid(['email' => 'The email field must be a valid email address.']);
    });
});
