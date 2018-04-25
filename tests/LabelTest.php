<?php

namespace FormManager\Tests;

class LabelTest extends BaseTest
{
    public function testOne()
    {
        $input = Builder::text()->label('Hello')->id('my-id');
        $input->label->id('my-label-id');

        $this->assertEquals('my-id', $input->attr('id'));
        $this->assertEquals('<div><label id="my-label-id" for="my-id">Hello</label> <input type="text" id="my-id" aria-labelledby="my-label-id"> </div>', (string) $input);
    }

    public function testTwo()
    {
        $input = Builder::text()->id('my-id')->label('Hello');
        $input->label->id('my-label-id');

        $this->assertEquals('my-id', $input->attr('id'));
        $this->assertEquals('<div><label id="my-label-id" for="my-id">Hello</label> <input type="text" id="my-id" aria-labelledby="my-label-id"> </div>', (string) $input);
    }
}
