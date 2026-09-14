<?php

use App\Models\User;

describe('create', function () {
    it('renders the login form with the email and password fields', function () {
        $response = $this->get(route('login'));

        $response->assertOk();
        $response->assertSee('Log in');
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
        $response->assertSee('action="'.route('login.store').'"', false);
    });
});

describe('store', function () {
    it('authenticates the user with correct credentials and redirects home', function () {
        $user = User::factory()->create();

        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    });

    it('rejects incorrect credentials and does not authenticate', function () {
        $user = User::factory()->create();

        $response = $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertInvalid(['email']);
        $this->assertGuest();
    });

    it('rejects an empty payload with all required field errors', function () {
        $response = $this->post(route('login.store'), []);

        $response->assertInvalid([
            'email' => 'The email field is required.',
            'password' => 'The password field is required.',
        ]);
        $this->assertGuest();
    });

    it('rejects an invalid email format', function () {
        $response = $this->post(route('login.store'), [
            'email' => 'not-an-email',
            'password' => 'password',
        ]);

        $response->assertInvalid(['email' => 'The email field must be a valid email address.']);
        $this->assertGuest();
    });
});
