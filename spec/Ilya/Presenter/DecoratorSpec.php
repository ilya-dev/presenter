<?php namespace spec\Ilya\Presenter;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DecoratorSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Ilya\Presenter\Decorator');
    }

    function it_decorates_an_object()
    {
        $this->decorate(new Dummy)->shouldBeLike(new DummyPresenter);
    }

}

class Dummy {}

class DummyPresenter {}

