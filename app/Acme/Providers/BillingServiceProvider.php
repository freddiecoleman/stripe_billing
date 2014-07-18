<?php namespace Acme\Providers;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider {

  public function register()
  {

    $this->app->bind('Acme\Interfaces\BillerInterface', 'Acme\Billing\StripeBiller');
    $this->app->bind('Acme\Interfaces\BillingNotifierInterface', 'Acme\Billing\EmailBillingNotifier');

  }

}
