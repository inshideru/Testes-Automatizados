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
    protected $label;
    protected $atributos;

    public function addText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function render()
    {
        $string = '';
        foreach ($this->atributos as $atributo => $valor) {
            $string .= $atributo . '="' . $valor . '" ';
        }

        echo '<textarea ' . $string . '> ';
        echo $this->text;
        echo '</textarea>';
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