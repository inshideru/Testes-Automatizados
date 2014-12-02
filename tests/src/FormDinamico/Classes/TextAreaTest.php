<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 01/12/14
 * Time: 20:45
 */

namespace FormDinamico\Classes;


class TextAreaTest extends \PHPUnit_Framework_TestCase
{
    public function testSeElementoInterface()
    {
        $textArea = new TextArea();
        $this->assertInstanceOf('FormDinamico\Interfaces\ElementoInterface', $textArea);
    }

    public function testAddLabelRetornaTextArea()
    {
        $textArea = new TextArea();
        $label = $this->getMockBuilder('FormDinamico\Classes\Label')->disableOriginalConstructor()->getMock();
        $textArea = $textArea->addLabel($label);

        $this->assertInstanceOf('FormDinamico\Classes\TextArea', $textArea);
    }
    public function testSetDivGroupClassRetornaTextArea()
    {
        $textArea = new TextArea();
        $label = $this->getMockBuilder('FormDinamico\Classes\Label')->disableOriginalConstructor()->getMock();
        $textArea = $textArea->setDivGroupClass($label);

        $this->assertInstanceOf('FormDinamico\Classes\TextArea', $textArea);
    }

    public function testSeTemRender()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\TextArea', 'render'),
            'A classe nao tem o metodo render'
        );
    }

    public function testSetterAndGetter()
    {
        $textArea = new TextArea();

        $textArea->set('atributo', 'valor');
        $this->assertEquals('valor', $textArea->get('atributo'));
    }

    public function testAddTextRetornaTextArea()
    {
        $textArea = new TextArea();
        $textArea = $textArea->addText('texto');

        $this->assertInstanceOf('FormDinamico\Classes\TextArea', $textArea);
    }
} 