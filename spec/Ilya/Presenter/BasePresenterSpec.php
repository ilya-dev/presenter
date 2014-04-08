<?php namespace spec\Ilya\Presenter;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BasePresenterSpec extends ObjectBehavior {

    function let(Mock $mock)
    {
        $this->beConstructedWith($mock);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Ilya\Presenter\BasePresenter');
    }

    function it_redirects_method_calls_to_the_wrapped_object(Mock $mock)
    {
        $mock->foo()->shouldBeCalled();

        $this->getWrappedObject()->foo();
    }

    function it_can_read_a_property_from_the_entity()
    {
        // don't see a better way to test it
        // at least, now

        if ($this->getWrappedObject()->bar != 'baz')
        {
            throw new \LogicException();
        }
    }

    function it_allows_you_to_override_a_property_by_declaring_a_method()
    {
        if ($this->getWrappedObject()->wow != 'amaze')
        {
            throw new \LogicException();
        }
    }

}

class Mock {

    public $bar = 'baz';

    public $wow = 'such';

    public function foo()
    {
        return 'fizz';
    }

}

namespace Ilya\Presenter;

class BasePresenter extends Presenter {

    public function wow()
    {
        return 'amaze';
    }

}

