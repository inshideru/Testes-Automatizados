<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 17/10/14
 * Time: 17:56
 */

namespace FormDinamico\Classes;


class Validator
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
} 