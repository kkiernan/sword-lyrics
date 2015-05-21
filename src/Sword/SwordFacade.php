<?php namespace Macklesnake\Facades;

use Illuminate\Support\Facades\Facade;

class SwordFacade extends Facade {

	/**
	 * Register the service provider.
	 * 
	 * @return void
	 */
	protected static function getFacadeAccessor()
	{
		return 'Sword';
	}

}