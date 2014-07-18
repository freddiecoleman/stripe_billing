<?php

App::bind('Acme\Interfaces\BillerInterface', 'Acme\Billing\StripeBiller');
App::bind('Acme\Interfaces\BillingNotifierInterface', 'Acme\Billing\EmailBillingNotifier');

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));


Route::get('buy', function(){

  return View::make('buy');

});

Route::post('buy', function(){

  $biller = App::make('Acme\Interfaces\BillerInterface');
  return $biller->bill([
    'email' => Input::get('email'),
    'token' => Input::get('stripe-token')
  ]);

});
