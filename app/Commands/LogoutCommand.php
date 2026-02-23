<?php

namespace App\Commands;

use App\Services\CredentialStore;
use LaravelZero\Framework\Commands\Command;

class LogoutCommand extends Command
{
    protected $signature = 'logout';

    protected $description = 'Clear your stored Oh Dear credentials';

    public function handle(CredentialStore $credentials): int
    {
        $credentials->flush();

        $this->info('Logged out successfully.');

        return self::SUCCESS;
    }
}
