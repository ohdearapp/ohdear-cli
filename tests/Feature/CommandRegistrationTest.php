<?php

it('registers key API commands from the OpenAPI spec', function (string $command) {
    $commands = collect(\Illuminate\Support\Facades\Artisan::all())->keys()->toArray();

    expect($commands)->toContain($command);
})->with([
    'list-monitors',
    'get-monitor',
    'create-monitor',
    'delete-monitor',
    'get-me',
    'get-uptime',
]);
