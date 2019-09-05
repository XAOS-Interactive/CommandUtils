<?php

namespace XAOSIA\CommandUtils;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use XAOSIA\CommandUtils\Commands\AppNameCommand;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommands();
    }

    /**
     * Register utility commands
     */
    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AppNameCommand::class
            ]);
        }
    }

}