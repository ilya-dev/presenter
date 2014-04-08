<?php namespace Ilya\Presenter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class PresenterServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
    {
        $this->app->singleton('decorator', 'Ilya\Presenter\Decorator');

        $loader = AliasLoader::getInstance();

        $loader->alias('Presenter', 'Ilya\Presenter\Presenter');
        $loader->alias('Decorator', 'Ilya\Presenter\Facades\DecoratorFacade');
	}

	/**
	 * Boot the service provider.
	 *
	 * @return void
     */
	public function boot()
	{
        $this->package('ilya/presenter');

        require __DIR__.'/../../helpers.php';
	}

}

