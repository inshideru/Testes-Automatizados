<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 20/10/14
 * Time: 14:54
 */

namespace FormDinamico\Classes;

use FormDinamico\Interfaces\ElementoInterface;
use FormDinamico\Interfaces\FieldsetInterface;

class Fieldset implements FieldsetInterface
{
    private $fields = array();
    private $erros = array();

    /**
     * @param ElementoInterface $field
     * @param array $atributos
     * @return ElementoInterface
     */
    public function createField(ElementoInterface $field, array $atributos)
    {
        foreach ($atributos as $atributo => $valor) {
            $field->set($atributo, $valor);
        }
        $this->fields [] = $field;
        return $field;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    public function setFieldValue($dados)
    {
        foreach ($this->fields as $field) {

            if ($field instanceof Input && $field->get('type') == 'text') {

                if (isset($dados[$field->get('name')]) && $dados[$field->get('name')] != '') {
                    $field->set('value', $dados[$field->get('name')]);

                    if ($field->get('name') == 'valor' && !is_numeric($field->get('value'))) {
                        $this->erros[] = "Campo <strong>valor</strong> deve ser numérico";
                    }

                    if ($field->get('name') == 'descricao' && strlen($field->get('value')) > 200) {
                        $this->erros[] = "<strong>Descrição</strong> não pode ter mais de 200 caracteres";
                    }

                } else {
                    $this->erros[] = "Campo <strong>{$field->get('name')}</strong> está vazio ou não foi encontrado.";
                }

            } else if ($field instanceof Select) {

                foreach ($dados['select'] as $option) {

                    $field->addOption($option['id'], $option['categoria']);

                }
            }
        }
    }

    public function render()
    {
        echo '<fieldset>';
        if (count($this->erros) > 0) {
            echo '<ul class="list-group">';
            foreach ($this->erros as $erro) {
                echo "<li class=\"list-group-item text-danger\"><i class=\"glyphicon glyphicon-remove\"></i> {$erro}</li>";
            }
            echo '</ul>';
        }
        foreach ($this->fields as $field) {
            $field->render();
        }
        echo '</fieldset>';
    }

}