<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 20/10/14
 * Time: 14:54
 */

namespace app\Classes;


use app\Interfaces\ElementoInterface;
use app\Interfaces\FieldsetInterface;

class Fieldset implements FieldsetInterface
{
    private $fields = array();

    public function createField(ElementoInterface $field, array $atributos)
    {
        foreach ($atributos as $atributo => $valor) {
            $field->set($atributo, $valor);
        }
        $this->fields [] = $field;
        return $field;
    }

    public function render()
    {
        echo '<fieldset>';
        foreach($this->fields as $field) {
            $field->render();
        }
        echo '</fieldset>';
    }

}