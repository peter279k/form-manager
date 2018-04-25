<?php

namespace FormManager\Tests;

use FormManager\Builder;
use FormManager\Fields\Choose;

class ChooseTest extends BaseTest
{
    public function testBase()
    {
        $field = Builder::choose([
            'value1' => Builder::radio()->label('Value 1'),
            'value2' => Builder::radio()->label('Value 2'),
            'value3' => Builder::radio()->label('Value 3'),
            'value4' => Builder::radio()->label('Value 4'),
        ]);

        $this->assertInstanceOf('FormManager\\Fields\\Choose', $field);
        $this->assertInstanceOf('FormManager\\Fields\\Radio', $field['value1']);

        return $field;
    }

    /**
     * @depends testBase
     */
    public function testValue(Choose $field)
    {
        $field->val('value1');

        $this->assertEquals('value1', $field->val());
        $this->assertTrue($field->validate());
        $this->assertTrue($field['value1']->attr('checked'));
        $this->assertNull($field['value2']->attr('checked'));

        $field->val('invalid-value');

        $this->assertFalse($field->validate());
        $this->assertEquals('invalid-value', $field->val());
    }
}
