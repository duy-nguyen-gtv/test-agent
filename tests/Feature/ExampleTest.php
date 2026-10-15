<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the homepage links to the services page', function () {
    $response = $this->get('/');

    $response->assertSee(route('services'));
});
