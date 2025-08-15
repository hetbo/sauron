<?php

namespace Hetbo\Sauron;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hetbo\Sauron\Commands\SauronCommand;

class SauronServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package
            ->name('sauron')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sauron_table')
            ->hasCommand(SauronCommand::class);
    }
}
