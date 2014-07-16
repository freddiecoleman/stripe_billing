<?php

use Acme\Billing\StripeBiller;

class HomeController extends BaseController {

	public function index()
	{
    $biller = new StripeBiller(new SmsNotifier);
    dd($biller);
		return View::make('hello');
	}

}
