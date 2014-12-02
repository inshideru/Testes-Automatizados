<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 01/12/14
 * Time: 20:23
 */

namespace FormDinamico\Classes;


class SelectTest extends \PHPUnit_Framework_TestCase
{
    public function testSeElementoInterface()
    {
        $select = new Select();
        $this->assertInstanceOf('FormDinamico\Interfaces\ElementoInterface', $select);
    }

    public function testAddOptionRetornaSelect()
    {
        $select = new Select();
        $select = $select->addOption('valor', 'text');

        $this->assertInstanceOf('FormDinamico\Classes\Select', $select);
    }

    public function testAddLabelRetornaSelect()
    {
        $select = new Select();
        $label = $this->getMockBuilder('FormDinamico\Classes\Label')->disableOriginalConstructor()->getMock();
        $select = $select->addLabel($label);

        $this->assertInstanceOf('FormDinamico\Classes\Select', $select);
    }

    public function testSetDivGroupClassRetornaSelect()
    {
        $select = new Select();
        $label = $this->getMockBuilder('FormDinamico\Classes\Label')->disableOriginalConstructor()->getMock();
        $select = $select->setDivGroupClass($label);

        $this->assertInstanceOf('FormDinamico\Classes\Select', $select);
    }

    public function testSeTemRender()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Select', 'render'),
            'A classe nao tem o metodo render'
        );
    }

    public function testSetterAndGetter()
    {
        $select = new Select();

        $select->set('atributo', 'valor');
        $this->assertEquals('valor', $select->get('atributo'));
    }
} 