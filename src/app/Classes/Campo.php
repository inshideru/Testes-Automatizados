<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 16:13
 */

namespace app\Classes;

abstract class Campo
{
    protected $label;
    protected $atributos;
    protected $divGroupClass;

    public abstract function render();

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