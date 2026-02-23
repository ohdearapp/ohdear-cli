<?php

it('displays the tagline in default output', function () {
    $this->artisan('list')
        ->expectsOutputToContain('ohdear.app')
        ->assertExitCode(0);
});
