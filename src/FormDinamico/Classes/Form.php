<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 11/10/14
 * Time: 13:31
 */

namespace FormDinamico\Classes;

use FormDinamico\Interfaces\FieldsetInterface;
use FormDinamico\Interfaces\FormInterface;

class Form implements FormInterface
{

    private $atributos = array();

    /** @var  FieldsetInterface */
    private $fieldset;

    public function __construct(array $atributos)
    {
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