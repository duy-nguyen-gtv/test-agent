<?php

test('the policy route returns a successful response', function () {
    $response = $this->get(route('policy'));

    $response->assertOk();
    $response->assertSee('Privacy Policy');
    $response->assertSee('Information we collect');
    $response->assertSee('Your rights');
    $response->assertSee(route('contacts'));
});

test('the policy page uses the homepage layout', function () {
    $response = $this->get(route('policy'));

    $response->assertOk();
    $response->assertSee(route('services'));
    $response->assertSee(route('login'));
    $response->assertSee(route('register'));
    $response->assertSee('ApexSoft. All rights reserved.');
});
