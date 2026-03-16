<?php

it('shows the banner tagline', function () {
    $this->artisan('help')
        ->expectsOutputToContain('ohdear.app')
        ->assertExitCode(0);
});

it('shows OUTPUT section with all output flags', function () {
    $this->artisan('help')
        ->expectsOutputToContain('--json')
        ->expectsOutputToContain('--yaml')
        ->expectsOutputToContain('--minify')
        ->expectsOutputToContain('--headers')
        ->expectsOutputToContain('--output-html')
        ->assertExitCode(0);
});

it('shows INPUT section with input flags', function () {
    $this->artisan('help')
        ->expectsOutputToContain('--field')
        ->expectsOutputToContain('--input')
        ->assertExitCode(0);
});

it('shows GLOBAL section with global flags', function () {
    $this->artisan('help')
        ->expectsOutputToContain('--version')
        ->expectsOutputToContain('--quiet')
        ->expectsOutputToContain('--no-ansi')
        ->assertExitCode(0);
});

it('shows HELP section', function () {
    $this->artisan('help')
        ->expectsOutputToContain('help <command>')
        ->expectsOutputToContain('<command> --help')
        ->assertExitCode(0);
});

it('shows API commands', function () {
    $this->artisan('help')
        ->expectsOutputToContain('list-monitors')
        ->assertExitCode(0);
});

it('does not show dev commands', function () {
    $this->artisan('help')
        ->doesntExpectOutputToContain('app:build')
        ->doesntExpectOutputToContain('make:command')
        ->assertExitCode(0);
});

it('shows per-command help for API commands', function () {
    $this->artisan('help', ['command_name' => 'list-monitors'])
        ->expectsOutputToContain('Description')
        ->expectsOutputToContain('Usage')
        ->assertExitCode(0);
});

it('shows per-command help for custom commands', function () {
    $this->artisan('help', ['command_name' => 'login'])
        ->expectsOutputToContain('Description')
        ->expectsOutputToContain('Usage')
        ->assertExitCode(0);
});
