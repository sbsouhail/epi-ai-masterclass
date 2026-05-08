<?php

declare(strict_types=1);

use Database\Seeders\DatabaseSeeder;

test('the application returns a successful response', function () {
    $this->seed(DatabaseSeeder::class);

    $response = $this->get('/');

    $response->assertStatus(200);
});

test('products page returns a successful response', function () {
    $this->seed(DatabaseSeeder::class);

    $response = $this->get('/products');

    $response->assertStatus(200);
});
