<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 10/07/2017
 * Time: 11:44
 */

namespace InterInvest\Aspone2Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use InterInvest\Aspone2Bundle\DependencyInjection\Aspone2Extension;

class Aspone2Bundle extends bundle
{
    public function getContainerExtension()
    {
        return new Aspone2Extension();
    }
}
