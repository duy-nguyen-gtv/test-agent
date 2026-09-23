<?php

test('the teams at scale route returns a successful response', function () {
    $response = $this->get(route('teams-at-scale'));

    $response->assertOk();
    $response->assertSee('Our teams');
    $response->assertSee('Our projects');
    $response->assertSee('Platform Engineering');
    $response->assertSee('Acme Retail Platform');
});
