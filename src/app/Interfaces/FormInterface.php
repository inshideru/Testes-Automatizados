<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 17/10/14
 * Time: 09:16
 */

namespace app\Interfaces;


interface FormInterface
{
    public function set($campo, $valor);
    public function get($valor);
    public function addCampo(ElementoInterface $campo);
    public function render();
}