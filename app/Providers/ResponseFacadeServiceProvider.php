<?php

namespace App\Providers;

use App\Helpers\ResponseHelper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ResponseFacadeServiceProvider extends ServiceProvider
{
    public function register()
    {
        App::bind('apiResponse',function() {
            return new ResponseHelper();
        });
    }

    public function boot()
    {
    }
}
