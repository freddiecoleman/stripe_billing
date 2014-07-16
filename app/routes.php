<?php

App::bind('Acme\Interfaces\BillerInterface', 'Acme\Billing\StripeBiller');
App::bind('Acme\Interfaces\BillingNotifierInterface', 'Acme\Billing\EmailBillingNotifier');

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
