<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    Redis::set('name', 'Taylor');

    dump(Redis::get('name'));
})->describe('Display an inspiring quote');
