<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

use function Termwind\render;

class CertificateHealthShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'certificate-health:show {site-id : The id of the site to view certificate health for}
                                                    {--c|checks : Include a list of the certificate checks that were performed}
                                                    {--i|issuers : Include a list of the certificate issuers}
                                                    {--f|full : Include all certificate information}';

    /** @var string */
    protected $description = 'Display the certificate health for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('certificate-health-show', [
            'certificateHealth' => $ohDear->certificateHealth($this->argument('site-id')),
            'withChecks' => $this->option('checks') || $this->option('full'),
            'withIssuers' => $this->option('issuers') || $this->option('full'),
        ]));
    }
}
