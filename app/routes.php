<?php

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
