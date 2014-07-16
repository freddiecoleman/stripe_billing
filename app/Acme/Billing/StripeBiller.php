<?php namespace Acme\Billing;

use Acme\Interfaces\BillerInterface;
use Acme\Interfaces\BillingNotifierInterface;

class StripeBiller implements BillerInterface {

  public function __construct(BillingNotifierInterface $notifier)
  {
    $this->notifier = $notifier;
  }

  public function bill(array $user, $amount)
  {

    $this->notifier->notify($user, $amount);

  }

}