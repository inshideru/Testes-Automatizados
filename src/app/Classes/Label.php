<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 16:34
 */

namespace app\Classes;



class Label extends Campo
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render()
    {
        $string = '';
        foreach ($this->atributos as $atributo => $valor) {
            $string .= $atributo . '=' . $valor . ' ';
        }
        echo '<label '. $string . '">' . $this->text . '</label>';
    }
}