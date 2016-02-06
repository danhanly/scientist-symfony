<?php

namespace DanHanly\ScientistBundle;

use Scientist\Laboratory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ScientistBundle
 * @package DanHanly\ScientistBundle
 */
class ScientistBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->register('scientist', Laboratory::class);
    }
}
