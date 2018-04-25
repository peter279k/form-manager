<?php

namespace FormManager\Tests;

use FormManager\Builder;
use FormManager\Validators\Required;

class LocalesTest extends BaseTest
{
    public function testLocales()
    {
        $input = Builder::text()->required();
        $message = 'custom error message';

        Required::$error_message = $message;

        $this->assertFalse($input->validate());

        $this->assertEquals($message, $input->error());
    }
}
