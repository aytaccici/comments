<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function initDatabase()
    {
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    protected function resetDatabase()
    {
        Artisan::call('migrate:reset');
    }

    protected function tearDown(): void
    {
        $config = app('config');
        $request  = app('request');
        parent::tearDown();
        app()->instance('config', $config);
        app()->instance('request', $request);
    }
}
