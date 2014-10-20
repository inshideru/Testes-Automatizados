<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 21:51
 */

namespace app\Classes;


use app\Interfaces\ElementoInterface;

class TextArea implements ElementoInterface
{
    private $text;
    private $label;
    private $atributos;
    private $divGroupClass;

    public function addText($text)
    {
        $this->text = $text;
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
        echo '<textarea ' . $parametros . '> ';
        echo $this->text;
        echo '</textarea>';
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