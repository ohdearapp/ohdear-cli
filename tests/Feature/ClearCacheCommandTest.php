<?php

use Illuminate\Support\Facades\Cache;
use Spatie\OpenApiCli\OpenApiCli;

it('clears the cached OpenAPI spec', function () {
    $registration = OpenApiCli::getRegistrations()[0];

    $key = $registration->getCachePrefix().md5($registration->getSpecPath());
    $store = $registration->getCacheStore();

    Cache::store($store)->put($key, ['content' => 'test', 'extension' => 'yaml'], 3600);

    expect(Cache::store($store)->has($key))->toBeTrue();

    $this->artisan('clear-cache')
        ->expectsOutput('Cache cleared successfully.')
        ->assertExitCode(0);

    expect(Cache::store($store)->has($key))->toBeFalse();
});

it('succeeds when the cache is already empty', function () {
    $this->artisan('clear-cache')
        ->expectsOutput('Cache cleared successfully.')
        ->assertExitCode(0);
});

it('cleans up temp spec files', function () {
    $tempDir = sys_get_temp_dir();
    $files = [
        $tempDir.'/openapi-cli-abc123.yaml',
        $tempDir.'/openapi-cli-def456.json',
    ];

    foreach ($files as $file) {
        file_put_contents($file, 'test');
    }

    $this->artisan('clear-cache')
        ->assertExitCode(0);

    foreach ($files as $file) {
        expect(file_exists($file))->toBeFalse();
    }
});
