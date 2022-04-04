<?php

namespace CodeviceCompany\LaravelUiKit\Commands;

use Illuminate\Console\Command;

class LaravelUiKitCommand extends Command
{
    public $signature = 'laravel-ui-kit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
