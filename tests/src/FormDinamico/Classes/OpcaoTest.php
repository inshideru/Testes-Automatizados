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
    public function testCategoriaSetterEGetter()
    {
        $opcao = new Opcao();
        $opcao->setCategoria('Teste');

        $this->assertEquals('Teste', $opcao->getCategoria());
    }

    public function testIdCategoriaSetterEGetter()
    {
        $opcao = new Opcao();
        $opcao->setId(4);

        $this->assertEquals(4, $opcao->getId());
    }


} 