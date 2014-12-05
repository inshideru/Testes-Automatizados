<?php

namespace FormDinamico\Db;

class OpcaoDAO
{
    private $db;
    private $entities = array();

    /**
     * @return array
     */
    public function fullList()
    {
        return $this->db->query("SELECT * from categoria")->fetchAll();
    }

    public function setDbAdapter(\PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function getConnection()
    {
        return $this->db;
    }

    public function persist($entity)
    {
        $this->entities[] = $entity;
    }

    public function flush()
    {
        foreach($this->entities as $entity) {

            $query = "insert into categoria
                        (id, categoria)
                      values
                        ({$entity->getId()}, '{$entity->getCategoria()}')";
            $this->db->exec($query);

        }
    }

}