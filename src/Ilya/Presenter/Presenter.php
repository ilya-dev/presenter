<?php namespace Ilya\Presenter;

abstract class Presenter {

    /**
     * The "decorated" entity
     *
     * @var mixed
     */
    protected $entity;

    /**
     * The constructor
     *
     * @param  mixed $entity
     * @return void
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Magic method
     *
     * @param  string $name
     * @return mixed
     */
    public function __get($name)
    {
        if (\method_exists($this, $name))
        {
            return \call_user_func([$this, $name]);
        }

        return $this->entity->{$name};
    }

    /**
     * Magic method
     *
     * @param  string $method
     * @param  array  $arguments
     * @return mixed
     */
    public function __call($method, array $arguments)
    {
        $callable = [$this->entity, $method];

        return \call_user_func_array($callable, $arguments);
    }

}

