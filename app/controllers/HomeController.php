<?php

use Acme\Interfaces\BillerInterface;

class HomeController extends BaseController {

  public function __construct(BillerInterface $biller)
  {
    $this->biller = $biller;
  }

	public function index()
	{
    dd($this->biller);
		return View::make('hello');
	}

}
