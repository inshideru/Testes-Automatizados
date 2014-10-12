<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 13:31
 */

namespace app\Classes;

class Form
{
    private $atributos = array();
    private $campos = array();

    public function set($atributo, $valor)
    {
        $this->atributos[$atributo] = $valor;
        return $this;
    }

    public function get($atributo)
    {
        return $this->atributos[$atributo];
    }

    public function addCampo(Campo $campo)
    {
        $this->campos[] = $campo;
    }

    public function render()
    {
        $string = '';
        foreach ($this->atributos as $atributo => $valor) {
            $string .= $atributo . '="' . $valor . '" ';
        }

        echo '<form ' . $string . '>';
        foreach ($this->campos as $campo) {
            $campo->render();
        }
        echo '</form>';
    }
}