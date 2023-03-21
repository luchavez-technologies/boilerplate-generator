<?php

namespace Luchavez\BoilerplateGenerator\Services;

use Exception;
use Illuminate\Database\Migrations\MigrationCreator;

/**
 * Class ExtendedMigrationCreator
 */
class ExtendedMigrationCreator extends MigrationCreator
{
    /**
     * @var string|null
     */
    protected ?string $package_dir = null;

    /**
     * @var string|null
     */
    protected ?string $domain_dir = null;

    /**
     * Create a new migration at the given path.
     *
     * @param  string  $name
     * @param  string  $path
     * @param  string|null  $table
     * @param  bool  $create
     * @return string
     *
     * @throws Exception
     */
    public function create($name, $path, $table = null, $create = false): string
    {
        return parent::create($name, $this->getPackageDomainFullPath($path), $table, $create);
    }

    /**
     * @param  string  $defaultPath
     * @return string
     */
    protected function getPackageDomainFullPath(string $defaultPath): string
    {
        return package_domain_migrations_path($this->package_dir, $this->domain_dir);
    }

    /***** SETTER & GETTER *****/

    /**
     * @param  string|null  $package_dir
     */
    public function setPackageDir(?string $package_dir): void
    {
        $this->package_dir = $package_dir;
    }

    /**
     * @param  string|null  $domain_dir
     */
    public function setDomainDir(?string $domain_dir): void
    {
        $this->domain_dir = $domain_dir;
    }
}
