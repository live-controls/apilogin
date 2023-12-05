<?php

namespace LiveControls\ApiLogin;

use Illuminate\Support\ServiceProvider;

class ApiLoginServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'livecontrols_apilogin');
  }

  public function boot()
  {
    // $migrationsPath = __DIR__.'/../database/migrations/';
    // $migrationPaths = [
    //   $migrationsPath.'userpermissions',
    // ];

    // $this->loadMigrationsFrom($migrationPaths);

    // if ($this->app->runningInConsole())
    // {
    //   $this->commands([
    //     //User Permission Commands
    //     AddUserPermissionCommand::class,
    //     AddUserToPermissionCommand::class,
    //     RemoveUserFromPermissionCommand::class
    //   ]);
    // }

    $this->publishes([
      __DIR__.'/../config/config.php' => config_path('livecontrols_apilogin.php'),
    ], 'livecontrols.apilogin.config');
  }
}
