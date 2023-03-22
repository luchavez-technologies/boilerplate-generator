<?php

namespace Luchavez\BoilerplateGenerator\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class AwsPublishCommand
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class AwsPublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'bg:aws:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all basic AWS related configuration for deployment.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->call('vendor:publish', [
            '--tag' => 'boilerplate-generator.aws',
        ]);

        return self::SUCCESS;
    }
}
