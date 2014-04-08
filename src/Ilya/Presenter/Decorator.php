<?php namespace Ilya\Presenter;

class Decorator {

    /**
     * Decorate an object
     *
     * @param  mixed $object
     * @return mixed
     */
    public function decorate($object)
    {
        $name = \get_class($object).'Presenter';

        return (new \ReflectionClass($name))->newInstance();
    }

}

