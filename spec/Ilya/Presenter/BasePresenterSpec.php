<?php namespace spec\Ilya\Presenter;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BasePresenterSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith(new Mock);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Ilya\Presenter\BasePresenter');
    }

}

class Mock {



}

namespace Ilya\Presenter;

class BasePresenter extends Presenter {}

