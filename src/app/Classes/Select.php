<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 21:24
 */

namespace app\Classes;


use app\Interfaces\ElementoInterface;

class Select implements ElementoInterface
{
    private $label;
    private $atributos;
    private $options = array();

    public function addOption($value, $text)
    {
        $this->options[$value] = $text;
        return $this;
    }

    public function render()
    {
        $string = '';
        foreach ($this->atributos as $atributo => $valor) {
            $string .= $atributo . '="' . $valor . '" ';
        }

        echo '<select ' . $string . '>';
            foreach ($this->options as $value => $text) {
                echo '<option value="'.$value.'">'.$text.'</option>';
            }
        echo '</select>';
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