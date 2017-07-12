<?php
/**
 * Created by PhpStorm.
 * User: bmari
 * Date: 10/07/2017
 * Time: 13:54
 */

namespace InterInvest\Bundle\Aspone\Tests\App;

require_once __DIR__ . '/../../vendor/autoload.php';

use Symfony\Bundle\FrameworkBundle\Console\Application;

$kernel = new AppKernel('dev', true);
$application = new Application($kernel);
$application->run();