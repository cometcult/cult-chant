<?php

namespace spec;

use PHPSpec2\ObjectBehavior;

class Member extends ObjectBehavior
{

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Member');
    }

    function it_should_chant()
    {
        $this->chant()->shouldReturn('All Hail The Comet! Hail The Comet.');
    }

}
