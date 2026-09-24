<?php

test('the iphone route returns a successful response', function () {
    $response = $this->get(route('iphone'));

    $response->assertOk();
    $response->assertSee('iphone 18');
    $response->assertSee('Buy now');
    $response->assertSee('please wait.');
});
