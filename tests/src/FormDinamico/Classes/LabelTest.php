<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 01/12/14
 * Time: 20:37
 */

namespace FormDinamico\Classes;


class LabelTest extends \PHPUnit_Framework_TestCase
{
    public function testSeLabelInterface()
    {
        $label = new Label('texto');
        $this->assertInstanceOf('FormDinamico\Interfaces\LabelInterface', $label);
    }

    public function testSeTemRender()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Label', 'render'),
            'A classe nao tem o metodo render'
        );
    }

    public function testSetterAndGetter()
    {
        $label = new Label('texto');

        $label->set('atributo', 'valor');
        $this->assertEquals('valor', $label->get('atributo'));
    }
}