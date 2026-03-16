<?php

namespace App\Services;

use App\Concerns\RendersBanner;
use Illuminate\Console\Application;
use NunoMaduro\LaravelConsoleSummary\Contracts\DescriberContract;
use NunoMaduro\LaravelConsoleSummary\Describer;
use Symfony\Component\Console\Output\OutputInterface;

class OhDearDescriber extends Describer
{
    use RendersBanner;

    protected function describeTitle(Application $application, OutputInterface $output): DescriberContract
    {
        $this->renderBanner($output);

        return parent::describeTitle($application, $output);
    }

    protected function describeUsage(OutputInterface $output): DescriberContract
    {
        parent::describeUsage($output);

        $output->writeln('');
        $output->writeln('  <fg=yellow;options=bold>OUTPUT:</>  <fg=green>--json</>              Raw JSON response');
        $output->writeln('           <fg=green>--yaml</>              YAML response');
        $output->writeln('           <fg=green>--minify</>            Compact output, no pretty-printing');
        $output->writeln('           <fg=green>-H, --headers</>       Include response headers');
        $output->writeln('           <fg=green>--output-html</>       Show full HTML response body');
        $output->writeln('');
        $output->writeln('  <fg=yellow;options=bold>INPUT:</>   <fg=green>--field key=value</>   Send form fields (repeatable, file: --field key=@path)');
        $output->writeln('           <fg=green>--input \'{}\'</>        Send raw JSON body');
        $output->writeln('');
        $output->writeln('  <fg=yellow;options=bold>GLOBAL:</>  <fg=green>-V, --version</>       Show version');
        $output->writeln('           <fg=green>-q, --quiet</>         Suppress all output');
        $output->writeln('           <fg=green>-v, --verbose</>       Increase verbosity (-vv, -vvv for more)');
        $output->writeln('           <fg=green>-n, --no-interaction</>  Skip interactive prompts');
        $output->writeln('           <fg=green>--no-ansi</>           Disable color output');
        $output->writeln('');
        $output->writeln('  <fg=yellow;options=bold>HELP:</>    <fg=green>help <command></>      Show all options for a command');
        $output->writeln('           <fg=green><command> --help</>     Same as above');

        return $this;
    }
}
