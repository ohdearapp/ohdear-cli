<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\DescriptorHelper;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelpCommand extends Command
{
    private Command $command;

    protected function configure(): void
    {
        $this->ignoreValidationErrors();

        $this
            ->setName('help')
            ->setDefinition([
                new InputArgument('command_name', InputArgument::OPTIONAL, 'The command name'),
            ])
            ->setDescription('Display help for a command')
            ->setHelp(<<<'EOF'
                Display the list of available commands:

                  <info>%command.full_name%</info>

                Display help for a specific command:

                  <info>%command.full_name% list-monitors</info>
                EOF
            );
    }

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (isset($this->command)) {
            $command = $this->command;
            unset($this->command);

            if ($command->getName() === 'list') {
                return $this->getApplication()->find('list')->run(new ArrayInput([]), $output);
            }

            (new DescriptorHelper)->describe($output, $command);

            return 0;
        }

        $commandName = $input->getArgument('command_name');

        if (! $commandName || $commandName === 'list') {
            return $this->getApplication()->find('list')->run(new ArrayInput([]), $output);
        }

        (new DescriptorHelper)->describe($output, $this->getApplication()->find($commandName));

        return 0;
    }
}
