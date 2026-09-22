<?php

test('the about page returns a successful response', function () {
    $response = $this->get(route('about'));

    $response->assertOk();
    $response->assertSee('About');
});

test('the about page describes who we are', function () {
    $response = $this->get(route('about'));

    $response->assertSee('We are');
});
