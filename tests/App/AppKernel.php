<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 10/07/2017
 * Time: 11:58
 */

namespace InterInvest\Bundle\Aspone\Tests\App;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{

    public function registerBundles()
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \InterInvest\Bundle\Aspone\AsponeBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }

    /**
     * Checks if a given class name belongs to an active bundle.
     *
     * @param string $class A class name
     *
     * @return bool true if the class belongs to an active bundle, false otherwise
     *
     * @deprecated since version 2.6, to be removed in 3.0.
     */
    public function isClassInActiveBundle($class)
    {
        // TODO: Implement isClassInActiveBundle() method.

        return true;
    }
}