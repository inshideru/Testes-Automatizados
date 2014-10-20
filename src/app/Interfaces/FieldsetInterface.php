<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 20/10/14
 * Time: 14:50
 */

namespace app\Interfaces;


interface FieldsetInterface
{
    public function createField(ElementoInterface $elemento, array $atributos);
    public function render();
} 