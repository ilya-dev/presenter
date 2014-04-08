<?php namespace Ilya\Presenter\Facades;

use Illuminate\Support\Facades\Facade;

class DecoratorFacade extends Facade {

    /**
     * Get the facade accessor
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'decorator';
    }

}

