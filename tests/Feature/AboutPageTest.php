<?php

describe('about page', function () {
    it('renders the about page with the expected sections', function () {
        $response = $this->get(route('about'));

        $response->assertOk();
        $response->assertSee('Who we are');
        $response->assertSee('Why choose us');
        $response->assertSee('Contact');
    });
});
