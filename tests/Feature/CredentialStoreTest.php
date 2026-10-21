<?php

use App\Services\CredentialStore;

beforeEach(function () {
    $this->tempDir = sys_get_temp_dir().'/ohdear-cli-test-'.uniqid();
    mkdir($this->tempDir, 0755, true);

    $_SERVER['HOME'] = $this->tempDir;

    $this->store = new CredentialStore;
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

it('returns null when no config file exists', function () {
    expect($this->store->getToken())->toBeNull();
});

it('stores and retrieves a token', function () {
    $this->store->setToken('test-api-token-123');

    expect($this->store->getToken())->toBe('test-api-token-123');
});

it('overwrites an existing token', function () {
    $this->store->setToken('first-token');
    $this->store->setToken('second-token');

    expect($this->store->getToken())->toBe('second-token');
});

it('flushes stored credentials', function () {
    $this->store->setToken('test-token');
    $this->store->flush();

    expect($this->store->getToken())->toBeNull();
});

it('creates the config directory if it does not exist', function () {
    $configDir = $this->tempDir.'/.ohdear';

    expect(is_dir($configDir))->toBeFalse();

    $this->store->setToken('test-token');

    expect(is_dir($configDir))->toBeTrue();
});

it('writes pretty-printed JSON', function () {
    $this->store->setToken('test-token');

    $configFile = $this->tempDir.'/.ohdear/config.json';
    $contents = file_get_contents($configFile);

    expect($contents)->toContain("\n");
    expect(json_decode($contents, true))->toBe(['token' => 'test-token']);
});

it('creates the config file readable only by the owner', function () {
    $this->store->setToken('test-token');

    expect(fileperms($this->tempDir.'/.ohdear/config.json') & 0777)->toBe(0600);
    expect(fileperms($this->tempDir.'/.ohdear') & 0777)->toBe(0700);
})->skipOnWindows();

it('restricts permissions of an existing config file', function () {
    $configFile = $this->tempDir.'/.ohdear/config.json';
    mkdir(dirname($configFile), 0755);
    file_put_contents($configFile, json_encode(['token' => 'old-token']));
    chmod($configFile, 0644);

    $this->store->setToken('new-token');

    expect(fileperms($configFile) & 0777)->toBe(0600);
})->skipOnWindows();

it('keeps the config file readable only by the owner after flushing', function () {
    $this->store->flush();

    expect(fileperms($this->tempDir.'/.ohdear/config.json') & 0777)->toBe(0600);
})->skipOnWindows();
