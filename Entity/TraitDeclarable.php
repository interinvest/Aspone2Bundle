<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 20/07/2017
 * Time: 09:54
 */

namespace interinvest\aspone2bundle\Entity;


trait TraitDeclarable
{
    public function __call($name, $arguments)
    {
        return "";
    }
}
