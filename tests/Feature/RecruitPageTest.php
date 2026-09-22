<?php

test('the recruit page renders the hiring page for a PHP Laravel developer', function () {
    $response = $this->get(route('recruit'));

    $response->assertOk();
    $response->assertSee("We're hiring", false);
    $response->assertSee('PHP Laravel Developer');
});
