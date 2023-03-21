<?php

namespace Luchavez\BoilerplateGenerator\Console\Commands;

use Luchavez\StarterKit\Traits\UsesCommandCustomMessagesTrait;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Composer;

/**
 * Class InstallCommand
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class InstallCommand extends Command
{
    use UsesCommandCustomMessagesTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'bg:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup your Laravel application to utilize the package.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(public Composer $composer)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $package = 'fligno/starter-kit';
        $this->ongoing("Initializing your project to use <bold>$package</bold> package");

        // Ensure `fligno/starter-kit` is a project dependency
        $this->newLine();
        $this->ongoing("Installing <bold>$package</bold> as a project dependency");
        if (! Arr::has(getContentsFromComposerJson(), 'require.fligno/starter-kit')) {
            $process = make_process(explode(' ', "composer require $package --no-update -n"));
            $process->start();
            $process->wait();

            if ($process->isSuccessful()) {
                $this->done("Successfully installed <bold>$package</bold>");
            } else {
                $this->warning("Failed to install <bold>$package</bold>");
            }
        } else {
            $this->warning("<bold>$package</bold> is already a dependency. Skipped.");
        }

        // Service Provider
        $provider = 'StarterBoilerplateServiceProvider';
        $this->newLine();
        $this->ongoing("Creating <bold>$provider</bold>");

        if (! file_exists(app_path("Providers/$provider.php"))) {
            $this->callSilently('bg:make:provider', [
                'name' => $provider,
                '--starter-kit' => true,
                '--package' => 'none',
                '--domain' => 'none',
                '--no-interaction' => true,
            ]);

            $this->composer->dumpAutoloads();
            $this->done("Successfully created <bold>$provider</bold>");
        } else {
            $this->warning("<bold>$provider</bold> already exists. Skipped.");
        }

        // Pest PHP
        $pest = 'Pest PHP';
        $this->newLine();
        $this->ongoing("Initializing <bold>$pest</bold>");
        if (! file_exists(base_path('tests/Pest.php'))) {
            $this->callSilently('pest:install', [
                '--no-interaction' => true,
            ]);

            $this->composer->dumpAutoloads();
            $this->done("Successfully initialized <bold>$pest</bold>");
        } else {
            $this->warning("<bold>$pest</bold> is already initialized. Skipped.");
        }

        return self::SUCCESS;
    }
}
