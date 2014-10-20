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
    private $divGroupClass;

    public function addOption($value, $text)
    {
        $this->options[$value] = $text;
        return $this;
    }

    public function render()
    {
        $parametros = '';
        foreach ($this->atributos as $atributo => $valor) {
            $parametros .= $atributo . '="' . $valor . '" ';
        }

        echo '<div class="' . $this->divGroupClass . '">';
        if ($this->label) {
            $this->label->render();
        }
        echo '<select ' . $parametros . '>';
            foreach ($this->options as $value => $text) {
                echo '<option value="'.$value.'">'.$text.'</option>';
            }
        echo '</select>';
        echo '</div>';
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

    public function addLabel(Label $label)
    {
        $this->label = $label;
        return $this;
    }

    public function setDivGroupClass($cssClass)
    {
        $this->divGroupClass = $cssClass;
        return $this;
    }
}