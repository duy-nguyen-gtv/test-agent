<?php

test('the poc route returns a successful response', function () {
    $response = $this->get(route('poc'));

    $response->assertOk();
    $response->assertSee('POC');
    $response->assertSee('We can develop your task in seconds.');
});
