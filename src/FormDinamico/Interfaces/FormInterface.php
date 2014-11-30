<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 17/10/14
 * Time: 09:16
 */

namespace FormDinamico\Interfaces;


interface FormInterface
{
    public function set($campo, $valor);
    public function get($valor);
    public function render();
}