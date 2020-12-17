<?php

namespace App\Commands;

use Illuminate\Support\Collection;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\CertificateHealth;

class CertificateHealthShowCommand extends Command
{
    /** @var string */
    protected $signature = 'certificate-health:show {site-id : The id of the site to view certificate health for}
                                                    {--c|checks : Include a list of the certificate checks that were performed}
                                                    {--i|issuers : Include a list of the certificate issuers}';

    /** @var string */
    protected $description = 'Display the certificate health for a site';

    public function handle(OhDear $ohDear): void
    {
        $certificateHealth = $ohDear->certificateHealth($this->argument('site-id'));

        $this->output->text([
            "<options=bold,underscore>Certificate Details</>",
            "<options=bold>Issuer:</> {$certificateHealth->certificateDetails['issuer']}",
            "<options=bold>Valid From:</> {$certificateHealth->certificateDetails['valid_from']}",
            "<options=bold>Valid Until:</> {$certificateHealth->certificateDetails['valid_until']}",
            ""
        ]);

        if ($this->option('checks')) {
            $this->output->writeln(" <options=bold,underscore>Checks</>");

            $this->output->listing(
                collect($certificateHealth->certificateChecks)->map(function (array $check) {
                    return "{$check['label']} (".($check['passed'] ? 'Passed' : 'Failed').")";
                })->toArray()
            );
        }

        if ($this->option('issuers')) {
            $this->output->writeln(" <options=bold,underscore>Issuers</>");

            $this->output->listing($certificateHealth->certificateChainIssuers);
        }
    }
}
