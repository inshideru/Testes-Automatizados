<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 01/12/14
 * Time: 20:40
 */

namespace FormDinamico\Classes;


class InputTest extends \PHPUnit_Framework_TestCase
{
    public function testSeElementoInterface()
    {
        $input = new Input();
        $this->assertInstanceOf('FormDinamico\Interfaces\ElementoInterface', $input);
    }

    public function testAddLabelRetornaInput()
    {
        $input = new Input();
        $input = $input->addLabel(new Label('texto'));

        $this->assertInstanceOf('FormDinamico\Classes\Input', $input);
    }
    public function testSetDivGroupClassRetornaInput()
    {
        $input = new Input();
        $input = $input->setDivGroupClass(new Label('class'));

        $this->assertInstanceOf('FormDinamico\Classes\Input', $input);
    }

    public function testSeTemRender()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Input', 'render'),
            'A classe nao tem o metodo render'
        );
    }

    public function testSetterAndGetter()
    {
        $input = new Input();

        $input->set('atributo', 'valor');
        $this->assertEquals('valor', $input->get('atributo'));
    }
} 