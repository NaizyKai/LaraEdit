<?php namespace LaraEdit\LaraEdit;

use Illuminate\Support\ServiceProvider;

class LaraEditServiceProvider extends ServiceProvider {

	public function boot()
	{

		$this->loadViewsFrom(__DIR__.'/Views', 'laraedit');
		
		include __DIR__.'/routes.php';
	
	}

	public function register()
	{
		
		$this->publishes([

            __DIR__.'/../public' => public_path('vendor/laraedit/laraedit')
            
        ]);

	}

}

