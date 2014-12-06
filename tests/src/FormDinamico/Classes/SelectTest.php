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
    private $select;
    private $label;

    public function setUp()
    {
        $this->select = new Select();
        $this->label = new Label('Texto');
    }

    public function tearDown()
    {
        unset($this->select, $this->label);
    }

    public function testSeElementoInterface()
    {
        $select = new Select();
        $this->assertInstanceOf('FormDinamico\Interfaces\ElementoInterface', $select);
    }

    public function testFuncionalSeElementoInterface()
    {
        $this->assertInstanceOf('FormDinamico\Interfaces\ElementoInterface', $this->select);
    }

    public function testAddOptionRetornaSelect()
    {
        $select = new Select();
        $select = $select->addOption('valor', 'text');

        $this->assertInstanceOf('FormDinamico\Classes\Select', $select);
    }

    public function testFuncionalAddOptionRetornaSelect()
    {
        $this->select = $this->select->addOption('valor', 'text');
        $this->assertInstanceOf('FormDinamico\Classes\Select', $this->select);
    }

    public function testAddLabelRetornaSelect()
    {
        $select = new Select();
        $label = $this->getMockBuilder('FormDinamico\Classes\Label')->disableOriginalConstructor()->getMock();
        $select = $select->addLabel($label);

        $this->assertInstanceOf('FormDinamico\Classes\Select', $select);
    }

    public function testFuncionalAddLabelRetornaSelect()
    {
        $this->select = $this->select->addLabel($this->label);
        $this->assertInstanceOf('FormDinamico\Classes\Select', $this->select);
    }

    public function testSetDivGroupClassRetornaSelect()
    {
        $select = new Select();
        $label = $this->getMockBuilder('FormDinamico\Classes\Label')->disableOriginalConstructor()->getMock();
        $select = $select->setDivGroupClass($label);

        $this->assertInstanceOf('FormDinamico\Classes\Select', $select);
    }

    public function testFuncionalSetDivGroupClassRetornaSelect()
    {
        $this->select = $this->select->setDivGroupClass($this->label);
        $this->assertInstanceOf('FormDinamico\Classes\Select', $this->select);
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

    public function testFuncionalSetterAndGetter()
    {
        $this->select->set('atributo', 'valor');
        $this->assertEquals('valor', $this->select->get('atributo'));
    }

} 