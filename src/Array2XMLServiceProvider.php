<?php

namespace richartkeil\array2xml;

use richartkeil\array2xml;

use Illuminate\Support\ServiceProvider;

class Array2XMLServiceProvider extends ServiceProvider
{
	/**
	* Bootstrap the application services.
	*
	* @return void
	*/
	public function boot()
	{
		//
	}

	/**
	* Register the application services.
	*
	* @return void
	*/
	public function register()
	{
		$this->app->singleton('array_2_xml', function() {
			return new Array2XML();
		});
	}
}
