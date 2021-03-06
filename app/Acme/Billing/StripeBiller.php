<?php namespace Acme\Billing;

use Acme\Interfaces\BillerInterface;
use Acme\Interfaces\BillingNotifierInterface;
use Stripe;
use Stripe_Charge;
use Config;

class StripeBiller implements BillerInterface {

  public function __construct(BillingNotifierInterface $notifier)
  {
    Stripe::setApiKey(Config::get('stripe.secret_key'));
    //$this->notifier = $notifier;
  }

  public function bill(array $data)
  {

    try
    {

      Stripe_Charge::create([
        'amount' => 1000,
        'currency' => 'usd',
        'description' => $data['email'],
        'card' => $data['token']
      ]);

      //$this->notifier->notify($user, $amount);

      return 'Charge was succesful';

    }

    catch(Stripe_CardError $e)
    {

      // card was declined

      dd('card was declined');

    }

    

    

  }

}