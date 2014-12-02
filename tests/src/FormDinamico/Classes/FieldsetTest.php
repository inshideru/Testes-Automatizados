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
    public function testSeFieldsetInterface()
    {
        $fieldSet = new Fieldset();
        $this->assertInstanceOf('FormDinamico\Interfaces\FieldsetInterface', $fieldSet);
    }

    public function testRetornaElementoInterface()
    {
        $fieldSet = new Fieldset();
        $input = $this->getMock('\FormDinamico\Classes\Input',array('render'));
        $elemento = $fieldSet->createField($input, array());

        $this->assertInstanceOf('FormDinamico\Interfaces\ElementoInterface', $elemento);
    }


    public function testSeTemCreateField()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Fieldset', 'createField'),
            'A classe nao tem o metodo createField'
        );
    }

    public function testSeTemRender()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Fieldset', 'render'),
            'A classe nao tem o metodo render'
        );
    }

    public function testFieldRender()
    {
        $field = $this->getMock('\FormDinamico\Classes\Input',array('render'));
        $field
            ->expects($this->any())
            ->method('render')
            ->willReturn('Renderizado');

        $fieldSet = new Fieldset();
        $fieldSet->createField($field,array());

        $this->assertEquals('Renderizado', $fieldSet->getFields()[0]->render());

    }
} 