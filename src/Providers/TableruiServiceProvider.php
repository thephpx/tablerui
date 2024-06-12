<?php

namespace Thephpx\Tablerui\Providers;

use Illuminate\Support\ServiceProvider;

class TableruiServiceProvider extends ServiceProvider
{
  public function register()
  {
    //
  }

  public function boot()
  {
    # Load model relations 
    
    # Load routes
    $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

    # Load views
    $this->loadViewsFrom(__DIR__.'/../../resources/views', 'Tablerui');

    # Load migration tables
    $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

    # Load config
    $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'Tablerui');

    # Publish assets
    $this->publishes([
      __DIR__.'/../../public/assets/tablerui/' => public_path('assets/tablerui/'),
    ], 'tablerui-assets');

    # Register package
    $packages = \Illuminate\Support\Facades\Session::get('packages');
    if(empty($packages)){
      $packages = [];
    }

    $packages[] = 'thephpx/tablerui';

    \Illuminate\Support\Facades\Session::put('packages', $packages);
  }
}