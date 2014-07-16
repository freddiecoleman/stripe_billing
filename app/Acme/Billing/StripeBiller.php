<?php

use Acme\Interfaces\BillerInterface;
use Acme\Interfaces\BilllingNotifierInterface;

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