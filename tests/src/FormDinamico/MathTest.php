<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 12/11/14
 * Time: 00:14
 */

namespace FormDinamico;

class MathTest extends \PHPUnit_Framework_TestCase
{
    public function tesVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf("FormDinamico\Math", new \FormDinamico\Math());
    }
} 