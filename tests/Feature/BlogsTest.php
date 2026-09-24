<?php

test('the blogs route returns a successful response', function () {
    $response = $this->get(route('blogs'));

    $response->assertOk();
    $response->assertSee('Our blog');
    $response->assertSee('News, ideas, and lessons from our team');
    $response->assertSee('How we scaled our platform to handle ten million requests a day');
});
