<?php

describe('welcome modal', function () {
    it('shows the welcome modal on the homepage', function () {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Welcome to Laravel');
        $response->assertSee('id="welcome-modal"', false);
        $response->assertSee('data-modal-close', false);
    });
});
