<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\Team;

class MeCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'me';

    /** @var string */
    protected $description = 'Display information about the currently authenticated user';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $data = $ohDear->me();

        $this->output->text([
            "<options=bold>ID:</> {$data->id}",
            "<options=bold>Name:</> {$data->name}",
            "<options=bold>Email:</> {$data->email}",
            '',
        ]);

        $this->line(" <options=bold,underscore>Teams</>\n");

        $this->output->listing(
            collect($data->teams)->map(static function (Team $team) {
                return "{$team->id} ({$team->name})";
            })->toArray()
        );
    }
}
