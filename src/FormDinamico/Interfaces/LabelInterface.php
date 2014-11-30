<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 20/10/14
 * Time: 15:16
 */

namespace FormDinamico\Interfaces;


interface LabelInterface
{
    public function set($campo, $valor);
    public function get($valor);
    public function render();
} 