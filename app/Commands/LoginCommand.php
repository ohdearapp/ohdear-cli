<?php

namespace App\Commands;

use App\Concerns\RendersBanner;
use App\Services\CredentialStore;
use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;

class LoginCommand extends Command
{
    use RendersBanner;

    protected $signature = 'login';

    protected $description = 'Store your Oh Dear API token for authentication';

    public function handle(CredentialStore $credentials): int
    {
        $this->renderBanner($this->output);

        $this->line('You can generate a token at <href=https://ohdear.app/user/api-tokens>https://ohdear.app/user/api-tokens</>');
        $this->newLine();

        $token = $this->secret('Enter your Oh Dear API token');

        if (! $token) {
            $this->error('No token provided.');

            return self::FAILURE;
        }

        try {
            $response = Http::withToken($token)->get('https://ohdear.app/api/me');
        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            $this->error('Could not connect to Oh Dear. Please check your internet connection.');

            return self::FAILURE;
        }

        if (! $response->successful()) {
            $this->error('Invalid API token.');

            return self::FAILURE;
        }

        $credentials->setToken($token);

        $email = $response->json('email', 'unknown');
        $this->info("Logged in as {$email}");

        return self::SUCCESS;
    }
}
