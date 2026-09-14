<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

describe('create', function () {
    it('renders the registration form with the name, email, and password fields', function () {
        $response = $this->get(route('register'));

        $response->assertOk();
        $response->assertSee('Create an account');
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
    });
});

describe('store', function () {
    it('creates the user, hashes the password, logs them in, and redirects home', function () {
        $response = $this->post(route('register.store'), [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'password' => 'super-secret-1',
        ]);

        $response->assertRedirect('/');
        $user = User::sole();
        expect($user->name)->toBe('Ada Lovelace');
        expect($user->email)->toBe('ada@example.com');
        expect(Hash::check('super-secret-1', $user->password))->toBeTrue();
        expect($user->password)->not->toBe('super-secret-1');
        $this->assertAuthenticatedAs($user);
    });

    it('rejects an empty payload with all required field errors and creates no user', function () {
        $response = $this->post(route('register.store'), []);

        $response->assertInvalid([
            'name' => 'The name field is required.',
            'email' => 'The email field is required.',
            'password' => 'The password field is required.',
        ]);
        expect(User::count())->toBe(0);
    });

    it('rejects a duplicate email and creates no second user', function () {
        $existingUser = User::factory()->create(['email' => 'taken@example.com']);

        $response = $this->post(route('register.store'), [
            'name' => 'New Person',
            'email' => 'taken@example.com',
            'password' => 'super-secret-1',
        ]);

        $response->assertInvalid(['email' => 'The email has already been taken.']);
        expect(User::count())->toBe(1);
        expect(User::where('email', 'taken@example.com')->count())->toBe(1);
    });

    it('rejects an invalid email format and creates no user', function () {
        $response = $this->post(route('register.store'), [
            'name' => 'Ada Lovelace',
            'email' => 'not-an-email',
            'password' => 'super-secret-1',
        ]);

        $response->assertInvalid(['email' => 'The email field must be a valid email address.']);
        expect(User::count())->toBe(0);
    });

    it('rejects a password shorter than 8 characters and creates no user', function () {
        $response = $this->post(route('register.store'), [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'password' => 'short1',
        ]);

        $response->assertInvalid(['password' => 'The password field must be at least 8 characters.']);
        expect(User::count())->toBe(0);
    });

    it('escapes a dangerous name when the form redisplays it after a validation failure', function () {
        $maliciousName = "<script>alert('xss')</script>";

        $response = $this->from(route('register'))
            ->followingRedirects()
            ->post(route('register.store'), [
                'name' => $maliciousName,
                'email' => 'not-an-email',
                'password' => 'super-secret-1',
            ]);

        $response->assertOk();
        $response->assertSee($maliciousName);
        $response->assertDontSee($maliciousName, false);
    });
});
