<?php namespace LaraEdit\LaraEdit;

use Illuminate\Support\ServiceProvider;

class LaraEditServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
    			__DIR__.'/../public/' => public_path('vendor/laraedit')
		], 'public');

		$this->loadViewsFrom(__DIR__.'/Views', 'laraedit');
		
		include __DIR__.'/routes.php';
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
	
	}

}
