<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 05/12/14
 * Time: 15:24
 */

namespace FormDinamico\Classes;


class OpcaoTest extends \PHPUnit_Framework_TestCase
{
    private $opcao;

    public function setUp()
    {
        $this->opcao = new Opcao();
    }

    public function tearDown()
    {
        unset($this->opcao);
    }

    public function testCategoriaSetterEGetter()
    {
        $opcao = new Opcao();
        $opcao->setCategoria('Teste');

        $this->assertEquals('Teste', $opcao->getCategoria());
    }

    public function testFuncionalCategoriaSetterEGetter()
    {
        $this->opcao->setCategoria('Teste');
        $this->assertEquals('Teste', $this->opcao->getCategoria());
    }

    public function testIdCategoriaSetterEGetter()
    {
        $opcao = new Opcao();
        $opcao->setId(4);

        $this->assertEquals(4, $opcao->getId());
    }

    public function testFuncionalIdCategoriaSetterEGetter()
    {
        $this->opcao->setId(4);
        $this->assertEquals(4, $this->opcao->getId());
    }

} 