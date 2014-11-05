<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 13:31
 */

namespace app\Classes;

use app\Interfaces\ElementoInterface;
use app\Interfaces\FieldsetInterface;
use app\Interfaces\FormInterface;

class Form implements FormInterface
{
    private $validator;
    private $atributos = array();

    /** @var  FieldsetInterface */
    private $fieldset;

    public function __construct(Validator $validator, array $atributos)
    {
        $this->validator = $validator;
        $this->atributos = $atributos;
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

    /**
     * @param FieldsetInterface $fieldset
     */
    public function setFieldset(FieldsetInterface $fieldset)
    {
        $this->fieldset = $fieldset;
    }

    public function popular($dados = array())
    {
        $this->fieldset->setFieldValue($dados);
    }

    public function render()
    {
        $parametros = '';
        foreach ($this->atributos as $atributo => $valor) {
            $parametros .= $atributo . '="' . $valor . '" ';
        }

        echo '<form ' . $parametros . '>';

        $this->fieldset->render();

        echo '</form>';
    }
}