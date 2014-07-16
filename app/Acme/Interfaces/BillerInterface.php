<?php

interface BillerInterface {
  public function bill(array $user, $amount);
}