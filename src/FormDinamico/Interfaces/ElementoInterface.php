<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 17/10/14
 * Time: 09:20
 */

namespace FormDinamico\Interfaces;

use FormDinamico\Classes\Label;

interface ElementoInterface
{
    public function set($campo, $valor);
    public function get($valor);
    public function addLabel(Label $label);
    public function setDivGroupClass($cssClass);
    public function render();
} 