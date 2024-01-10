<?php

namespace Uitccommerce\GitCommitChecker\Providers;

use Uitccommerce\GitCommitChecker\Commands\InstallCommand;
use Uitccommerce\GitCommitChecker\Commands\PreCommitHookCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
            PreCommitHookCommand::class,
        ]);
    }
}
