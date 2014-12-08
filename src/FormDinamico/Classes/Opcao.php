<?php

namespace FormDinamico\Classes;

class Opcao
{
    private $id;
    private $categoria;

    /**
     * @param $categoria
     * @throws \InvalidArgumentException
     */
    public function setCategoria($categoria)
    {
        if (!is_string($categoria)) {
            throw new \InvalidArgumentException("O valor informado para categoria deve ser texto.");
        }
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


} 