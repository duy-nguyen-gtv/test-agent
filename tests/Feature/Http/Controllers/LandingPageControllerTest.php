<?php

describe('landing page', function () {
    it('renders the landing page with a link to the services list', function () {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('We build products people love');
        $response->assertSee('Software Development');
        $response->assertSee('Marketing');
        $response->assertSee('href="'.route('services.index').'"', false);
    });
});
