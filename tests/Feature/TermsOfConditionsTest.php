<?php

test('the terms of conditions route returns a successful response', function () {
    $response = $this->get(route('terms-of-conditions'));

    $response->assertOk();
    $response->assertSee('Terms and Conditions');
    $response->assertSee('Acceptance of terms');
    $response->assertSee('Limitation of liability');
    $response->assertSee('legal@apexsoft.example');
});

test('the home page links to the terms of conditions page', function () {
    $response = $this->get('/');

    $response->assertOk();
    $response->assertSee(route('terms-of-conditions'));
});

test('the register page links to the terms of conditions page', function () {
    $response = $this->get(route('register'));

    $response->assertOk();
    $response->assertSee(route('terms-of-conditions'));
});
