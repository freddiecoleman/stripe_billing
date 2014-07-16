<?php

interface BillingNotifierInterface {
  public function notify(array $user, $amount);
}