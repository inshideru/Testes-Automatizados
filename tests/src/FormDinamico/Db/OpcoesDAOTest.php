<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 01/12/14
 * Time: 20:51
 */

namespace FormDinamico\Db;


class OpcoesDAOTest extends \PHPUnit_Framework_TestCase
{
    public function testAtributoDb()
    {
        $this->assertClassHasAttribute('db', 'FormDinamico\Db\OpcoesDAO');
    }
} 