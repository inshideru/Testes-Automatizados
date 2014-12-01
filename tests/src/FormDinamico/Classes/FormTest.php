<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 30/11/14
 * Time: 17:52
 */

namespace FormDinamico\Classes;


class FormTest extends \PHPUnit_Framework_TestCase
{
    public function testSeTemAtributos()
    {
        $this->assertTrue(method_exists('FormDinamico\Classes\Form', 'setFieldset'),
            'A classe nao tem o metodo setFieldset'
        );
    }
} 