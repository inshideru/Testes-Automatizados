<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 16:14
 */

namespace FormDinamico\Classes;

use FormDinamico\Interfaces\ElementoInterface;

class Input implements ElementoInterface
{
    private $tipo;
    private $label;
    private $atributos;
    private $divGroupClass;

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
        echo '<input ' . $parametros . '> ';
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