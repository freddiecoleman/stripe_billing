<?php namespace Acme\Interfaces;

interface BillingNotifierInterface {
  public function notify(array $user, $amount);
}