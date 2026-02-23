<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;
use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

class InstallSkillCommand extends Command
{
    protected $signature = 'install-skill';

    protected $description = 'Install the Oh Dear agent skill for AI coding assistants';

    public function handle(): int
    {
        $npx = (new ExecutableFinder)->find('npx');

        if ($npx === null) {
            $this->error('npx is not available on your system.');
            $this->line('Node.js and npm are required. Install them from <href=https://nodejs.org>https://nodejs.org</>');

            return self::FAILURE;
        }

        $process = new Process([$npx, '-y', 'skills', 'add', 'ohdearapp/ohdear-cli']);
        $process->setTimeout(null);
        $process->setTty(Process::isTtySupported());

        $process->run(function (string $type, string $buffer): void {
            $this->output->write($buffer);
        });

        return $process->getExitCode();
    }
}
