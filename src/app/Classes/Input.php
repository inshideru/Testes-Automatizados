<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 16:14
 */

namespace app\Classes;

use app\Interfaces\ElementoInterface;

class Input implements ElementoInterface
{
    private $tipo;
    protected $label;
    protected $atributos;

    public function render()
    {
        $string = '';
        foreach ($this->atributos as $atributo => $valor) {
            $string .= $atributo . '="' . $valor . '" ';
        }
        echo '<input ' . $string . '> ';
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