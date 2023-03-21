<?php

namespace Luchavez\BoilerplateGenerator\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class DocsGenCommand
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class DocsGenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bg:docs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Scribe documentations.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        if (! file_exists(config_path('scribe.php'))) {
            $this->call('vendor:publish', [
                '--tag' => 'scribe-config',
            ]);
        }

        $this->call('scribe:generate');
    }
}
