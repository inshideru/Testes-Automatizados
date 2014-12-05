<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 05/12/14
 * Time: 15:15
 */

namespace FormDinamico\Classes;


class OpcaoAgregator
{
    private $opcoes = array();

    public function addOpcao(Opcao $opcao)
    {
        $this->opcoes[] = $opcao;
    }

    public function getOpcoes()
    {
        return $this->opcoes;
    }

} 