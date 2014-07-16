<?php namespace Acme\Billing;

use Acme\Interfaces\BillingNotifierInterface;

class EmailBillingNotifier implements BillingNotifierInterface {

  public function notify(array $user, $amount)
  {

    return 1;

  }

}