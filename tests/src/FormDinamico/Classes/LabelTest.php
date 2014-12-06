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
    private $label;

    public function setUp()
    {
        $this->label = new Label('texto');
    }

    public function tearDown()
    {
        unset($this->label);
    }

    public function testSeLabelInterface()
    {
        $label = new Label('texto');
        $this->assertInstanceOf('FormDinamico\Interfaces\LabelInterface', $label);
    }

    public function testFuncionalSeLabelInterface()
    {
        $this->assertInstanceOf('FormDinamico\Interfaces\LabelInterface', $this->label);
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

    public function testFuncionalSetterAndGetter()
    {
        $this->label->set('atributo', 'valor');
        $this->assertEquals('valor', $this->label->get('atributo'));
    }
}