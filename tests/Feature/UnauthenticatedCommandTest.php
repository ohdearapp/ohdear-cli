<?php

use App\Services\CredentialStore;
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

it('shows an error when running an API command without credentials', function () {
    Http::fake([
        'ohdear.app/api/*' => Http::response(['error' => 'Unauthorized'], 401),
    ]);

    $this->artisan('list-monitors')
        ->assertExitCode(1);
});
