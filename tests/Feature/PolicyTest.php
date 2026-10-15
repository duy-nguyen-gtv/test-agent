<?php

test('the policy route returns a successful response', function () {
    $response = $this->get(route('policy'));

    $response->assertOk();
    $response->assertSee('Privacy Policy');
    $response->assertSee('Information we collect');
    $response->assertSee('Your rights');
    $response->assertSee(route('contacts'));
});
