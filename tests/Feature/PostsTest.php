<?php

test('the posts route returns a successful response', function () {
    $response = $this->get(route('posts'));

    $response->assertOk();
    $response->assertSee('Building Faster with Laravel');
    $response->assertSee('Jane Doe');
});
