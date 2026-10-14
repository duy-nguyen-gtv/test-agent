<?php

test('the about route returns a successful response', function () {
    $response = $this->get(route('about'));

    $response->assertOk();
    $response->assertSee('About us');
    $response->assertSee('Our story');
    $response->assertSee('Our values');
    $response->assertSee('Our team');
    $response->assertSee('Alex Morgan');
    $response->assertSee(route('contacts'));
});

test('the home page links to the about page', function () {
    $response = $this->get('/');

    $response->assertOk();
    $response->assertSee(route('about'));
});
