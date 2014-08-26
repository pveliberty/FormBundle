<?php

namespace Eliberty\FormBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Eliberty\FormBundle\DependencyInjection\Compiler\AddFormRessourcePass;

class ElibertyFormBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new AddFormRessourcePass());
    }

}
