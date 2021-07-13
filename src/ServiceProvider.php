<?php

namespace Bfg\Files;

use Bfg\Installer\Providers\InstalledProvider;

/**
 * Class ServiceProvider
 * @package Bfg\Files
 */
class ServiceProvider extends InstalledProvider
{
    /**
     * The description of extension.
     * @var string|null
     */
    public ?string $description = "The package is aimed at controlling files";

    /**
     * Set as installed by default.
     * @var bool
     */
    public bool $installed = true;

    /**
     * Executed when the provider is registered
     * and the extension is installed.
     * @return void
     */
    public function installed(): void
    {
        //
    }

    /**
     * Executed when the provider run method
     * "boot" and the extension is installed.
     * @return void
     */
    public function run(): void
    {
        //
    }
}

