<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 30/11/14
 * Time: 17:52
 */

namespace FormDinamico\Classes;


class FieldsetTest extends \PHPUnit_Framework_TestCase
{
    public function testRetornaElementoInterface()
    {
        $fieldSet = new Fieldset();

        $elemento = $fieldSet->createField(new Input(), array());

        $this->assertInstanceOf('FormDinamico\Interfaces\ElementoInterface', $elemento);
    }
} 