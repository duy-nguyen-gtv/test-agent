<?php

test('the services route returns a successful response', function () {
    $response = $this->get(route('services'));

    $response->assertOk();
    $response->assertSee('Our services');
    $response->assertSee('Custom Software Development');
    $response->assertSee('Ongoing Support');
    $response->assertSee('How we work');
    $response->assertSee(route('contacts'));
});
