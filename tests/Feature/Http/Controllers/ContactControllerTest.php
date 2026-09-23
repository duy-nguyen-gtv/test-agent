<?php

use Illuminate\Support\Facades\Log;

describe('create', function () {
    it('renders the contact form with the name, email, and message fields', function () {
        $response = $this->get(route('contacts'));

        $response->assertOk();
        $response->assertSee('Contact us');
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="message"', false);
        $response->assertSee('action="'.route('contacts.store').'"', false);
    });
});

describe('store', function () {
    it('logs the contact submission and redirects back to the form', function () {
        Log::spy();

        $response = $this->post(route('contacts.store'), [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'message' => 'Hello, I have a question.',
        ]);

        $response->assertRedirect(route('contacts'));
        $response->assertSessionHas('status', 'Your message has been sent.');

        Log::shouldHaveReceived('info')
            ->once()
            ->with('Contact form submission received.', [
                'name' => 'Ada Lovelace',
                'email' => 'ada@example.com',
                'message' => 'Hello, I have a question.',
            ]);
    });

    it('rejects an empty payload with all required field errors', function () {
        $response = $this->post(route('contacts.store'), []);

        $response->assertInvalid([
            'name' => 'The name field is required.',
            'email' => 'The email field is required.',
            'message' => 'The message field is required.',
        ]);
    });

    it('rejects an invalid email format', function () {
        $response = $this->post(route('contacts.store'), [
            'name' => 'Ada Lovelace',
            'email' => 'not-an-email',
            'message' => 'Hello, I have a question.',
        ]);

        $response->assertInvalid(['email' => 'The email field must be a valid email address.']);
    });
});
