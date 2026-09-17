<?php

describe('index', function () {
    it('renders the services list with every offered service', function () {
        $response = $this->get(route('services.index'));

        $response->assertOk();
        $response->assertSee('Our Services');
        $response->assertSee('Software Development');
        $response->assertSee('Marketing');
        $response->assertSee('API design and integration');
        $response->assertSee('Paid advertising');
    });
});
