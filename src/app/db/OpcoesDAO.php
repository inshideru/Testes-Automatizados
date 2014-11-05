<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 05/11/14
 * Time: 10:40
 */

namespace app\Db;

class OpcoesDAO
{
    private $db;

    public function __construct()
    {
        $this->db = new \PDO('sqlite:../src/app/Db/opcoes.sqlite3');
    }

    public function fullList()
    {
        return $this->db->query("SELECT * from categoria")->fetchAll();
    }
}