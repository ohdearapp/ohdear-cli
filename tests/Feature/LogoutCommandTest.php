<?php

use App\Services\CredentialStore;

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

it('clears stored credentials and shows confirmation', function () {
    $this->store->setToken('existing-token');

    $this->artisan('logout')
        ->expectsOutput('Logged out successfully.')
        ->assertExitCode(0);

    expect($this->store->getToken())->toBeNull();
});
