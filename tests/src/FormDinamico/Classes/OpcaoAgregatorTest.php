<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 05/12/14
 * Time: 15:25
 */

namespace FormDinamico\Classes;


class OpcaoAgregatorTest extends \PHPUnit_Framework_TestCase
{
    private $opcao;
    private $opcaoAgregator;

    public function setUp()
    {
        $this->opcao = new Opcao();
        $this->opcaoAgregator = new OpcaoAgregator();
    }

    public function tearDown()
    {
        unset($this->opcao, $this->opcaoAgregator);
    }

    public function testFuncionamentoOpcaoAgregator()
    {
        $opcao = $this->getMock('\FormDinamico\Classes\Opcao', array('getCategoria'));
        $opcao
            ->expects($this->any())
            ->method('getCategoria')
            ->willReturn('Texto')
        ;

        $opcao2 = $this->getMock('\FormDinamico\Classes\Opcao', array('getCategoria'));
        $opcao2
            ->expects($this->any())
            ->method('getCategoria')
            ->willReturn('Texto2')
        ;

        $agregator = new OpcaoAgregator();
        $agregator->addOpcao($opcao);
        $agregator->addOpcao($opcao2);

        $opcoes = $agregator->getOpcoes();
        $this->assertEquals('Texto', $opcoes[0]->getCategoria());
        $this->assertEquals('Texto2', $opcoes[1]->getCategoria());
    }

    public function testFuncionalFuncionamentoOpcaoAgregator()
    {
        $this->opcao->setCategoria('Texto');
        $this->opcaoAgregator->addOpcao($this->opcao);

        $opcoes = $this->opcaoAgregator->getOpcoes();
        $this->assertEquals('Texto', $opcoes[0]->getCategoria());
    }
} 