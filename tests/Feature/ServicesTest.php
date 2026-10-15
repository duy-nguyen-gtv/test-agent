<?php

test('the services route returns a successful response', function () {
    $response = $this->get(route('services'));

    $response->assertOk();
    $response->assertSee('Our services');
    $response->assertSee('What we do');
    $response->assertSee('Custom Software Development');
    $response->assertSee('How we work');
    $response->assertSee(route('contacts'));
});

test('the services page is linked from the home and teams at scale pages', function () {
    $this->get('/')->assertOk()->assertSee(route('services'));
    $this->get(route('teams-at-scale'))->assertOk()->assertSee(route('services'));
});
