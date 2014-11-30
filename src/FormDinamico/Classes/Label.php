<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 16:34
 */

namespace FormDinamico\Classes;

use FormDinamico\Interfaces\LabelInterface;

class Label implements LabelInterface
{
    private $text;
    private $atributos = array();

    public function __construct($texto)
    {
        $this->text = $texto;
    }

    public function render()
    {
        $parametros = '';
        foreach ($this->atributos as $atributo => $valor) {
            $parametros .= $atributo . '=' . $valor . ' ';
        }
        echo '<label '. $parametros . '">' . $this->text . '</label>';
    }
    public function set($atributo, $valor)
    {
        $this->atributos[$atributo] = $valor;
        return $this;
    }

    public function get($atributo)
    {
        return $this->atributos[$atributo];
    }

}