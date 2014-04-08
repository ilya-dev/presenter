<?php

if ( ! function_exists('wrap'))
{
    function wrap($object)
    {
        $decorator = app()->make('Ilya\Presenter\Decorator');

        return $decorator->decorate($object);
    }
}

