<?php

namespace App\Concerns;

use Symfony\Component\Console\Output\OutputInterface;

trait RendersBanner
{
    public function renderBanner(OutputInterface $output): void
    {
        $lines = [
            '   ██████╗  ██╗  ██╗   ██████╗  ███████╗  █████╗  ██████╗ ',
            '  ██╔═══██╗ ██║  ██║   ██╔══██╗ ██╔════╝ ██╔══██╗ ██╔══██╗',
            '  ██║   ██║ ███████║   ██║  ██║ █████╗   ███████║ ██████╔╝',
            '  ██║   ██║ ██╔══██║   ██║  ██║ ██╔══╝   ██╔══██║ ██╔══██╗',
            '  ╚██████╔╝ ██║  ██║   ██████╔╝ ███████╗ ██║  ██║ ██║  ██║',
            '   ╚═════╝  ╚═╝  ╚═╝   ╚═════╝  ╚══════╝ ╚═╝  ╚═╝ ╚═╝  ╚═╝',
        ];

        $gradient = [160, 196, 197, 203, 209, 167];

        $output->writeln('');

        foreach ($lines as $i => $line) {
            $output->writeln("\e[38;5;{$gradient[$i]}m{$line}\e[0m");
        }

        $output->writeln('');

        $tagline = ' ✦ All-in-one monitoring for your entire website :: ohdear.app ✦ ';
        $output->writeln("\e[48;5;{$gradient[1]}m\e[97m\e[1m{$tagline}\e[0m");

        $output->writeln('');
    }
}
