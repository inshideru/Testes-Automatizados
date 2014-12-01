<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 05/11/14
 * Time: 10:40
 */

namespace FormDinamico\Db;

class OpcoesDAO
{
    private $db;

    public function __construct()
    {
        $this->db = new \PDO('sqlite:../src/FormDinamico/Db/opcoes.sqlite3');
    }

    /**
     * @return array
     */
    public function fullList()
    {
        return $this->db->query("SELECT * from categoria")->fetchAll();
    }
}