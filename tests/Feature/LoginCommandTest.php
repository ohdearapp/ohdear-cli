<?php

use App\Services\CredentialStore;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    $this->tempDir = sys_get_temp_dir().'/ohdear-cli-test-'.uniqid();
    mkdir($this->tempDir, 0755, true);
    $_SERVER['HOME'] = $this->tempDir;

    $this->store = new CredentialStore;
    $this->app->instance(CredentialStore::class, $this->store);
});

afterEach(function () {
    $configFile = $this->tempDir.'/.ohdear/config.json';
    if (file_exists($configFile)) {
        unlink($configFile);
    }
    if (is_dir($this->tempDir.'/.ohdear')) {
        rmdir($this->tempDir.'/.ohdear');
    }
    if (is_dir($this->tempDir)) {
        rmdir($this->tempDir);
    }
});

it('stores credentials on successful login', function () {
    Http::fake([
        'ohdear.app/api/me' => Http::response([
            'id' => 1,
            'name' => 'Freek',
            'email' => 'freek@spatie.be',
            'teams' => [],
        ]),
    ]);

    $this->artisan('login')
        ->expectsQuestion('Enter your Oh Dear API token', 'valid-token-123')
        ->expectsOutput('Logged in as freek@spatie.be')
        ->assertExitCode(0);

    expect($this->store->getToken())->toBe('valid-token-123');
});

it('shows error and does not store token on invalid token', function () {
    Http::fake([
        'ohdear.app/api/me' => Http::response(['error' => 'Unauthorized'], 401),
    ]);

    $this->artisan('login')
        ->expectsQuestion('Enter your Oh Dear API token', 'invalid-token')
        ->expectsOutput('Invalid API token.')
        ->assertExitCode(1);

    expect($this->store->getToken())->toBeNull();
});

it('shows connection error on network failure', function () {
    Http::fake([
        'ohdear.app/api/me' => function () {
            throw new ConnectionException('Connection refused');
        },
    ]);

    $this->artisan('login')
        ->expectsQuestion('Enter your Oh Dear API token', 'some-token')
        ->expectsOutput('Could not connect to Oh Dear. Please check your internet connection.')
        ->assertExitCode(1);

    expect($this->store->getToken())->toBeNull();
});
