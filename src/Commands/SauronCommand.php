<?php

namespace Hetbo\Sauron\Commands;

use Illuminate\Console\Command;

class SauronCommand extends Command
{
    public $signature = 'sauron';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
