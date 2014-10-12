<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 21:51
 */

namespace app\Classes;


class TextArea extends Campo
{
    private $text;

    public function addText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function render()
    {
        /*
         * <textarea rows="4" cols="50">
        Texto
        </textarea>
         */

        $string = '';
        foreach ($this->atributos as $atributo => $valor) {
            $string .= $atributo . '="' . $valor . '" ';
        }

        echo '<div class="' . $this->divGroupClass . '">';
        if ($this->label) {
            $this->label->render();
        }
        echo '<textarea ' . $string . '> ';
        echo $this->text;
        echo '</textarea>';
        echo '</div>';
    }
}