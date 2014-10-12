<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 21:24
 */

namespace app\Classes;


class Select extends Campo
{
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

        echo '<div class="' . $this->divGroupClass . '">';
        if ($this->label) {
            $this->label->render();
        }
        echo '<select ' . $string . '>';
            foreach ($this->options as $value => $text) {
                echo '<option value="'.$value.'">'.$text.'</option>';
            }
        echo '</select>';
        echo '</div>';
    }
}