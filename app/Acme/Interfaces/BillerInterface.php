<?php namespace Acme\Interfaces;

interface BillerInterface {
  public function bill(array $user, $amount);
}