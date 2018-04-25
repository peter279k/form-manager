<?php

namespace FormManager\Tests;

class InputTextTest extends BaseTest
{
    public function testBasic()
    {
        $this->_testElement(Builder::text());
        $this->_testField(Builder::text());
        $this->_testRequired(Builder::text());
        $this->_testMaxlength(Builder::text());
        $this->_testPattern(Builder::text());
        $this->_testValidator(Builder::text());
    }
}
