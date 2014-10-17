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
    protected $label;
    protected $atributos;
    protected $divGroupClass;

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
        echo '<input ' . $string . '> ';
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

    public function setDivGroupClass($class)
    {
        $this->divGroupClass = $class;
        return $this;
    }
}