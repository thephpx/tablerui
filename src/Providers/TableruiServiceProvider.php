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

    # Publish assets
    $this->publishes([
      __DIR__.'/../../public/assets/tablerui/' => public_path('assets/tablerui/'),
    ], 'tablerui-assets');
  }
}