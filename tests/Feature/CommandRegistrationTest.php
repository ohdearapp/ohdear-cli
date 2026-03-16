<?php

use Illuminate\Support\Facades\Artisan;

it('registers key API commands from the OpenAPI spec', function (string $command) {
    $commands = collect(Artisan::all())->keys()->toArray();

    expect($commands)->toContain($command);
})->with([
    'list-monitors',
    'get-monitor',
    'create-monitor',
    'delete-monitor',
    'get-me',
    'get-uptime',
]);
