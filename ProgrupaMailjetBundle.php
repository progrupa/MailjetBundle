<?php

namespace Progrupa\MailjetBundle;

use Progrupa\MailjetBundle\DependencyInjection\Compiler\CustomHandlersPass;
use Progrupa\MailjetBundle\DependencyInjection\Compiler\RegisterEventListenersAndSubscribersPass;
use Progrupa\MailjetBundle\DependencyInjection\Compiler\ServiceMapPass;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProgrupaMailjetBundle extends Bundle
{
    public function build(ContainerBuilder $builder)
    {
        $builder->addCompilerPass(new ServiceMapPass('mailjet.serializer.serialization_visitor', 'format',
            function(ContainerBuilder $container, Definition $def) {
                $container->getDefinition('mailjet.serializer.serializer')->replaceArgument(3, $def);
            }
        ));
        $builder->addCompilerPass(new ServiceMapPass('mailjet.serializer.deserialization_visitor', 'format',
            function(ContainerBuilder $container, Definition $def) {
                $container->getDefinition('mailjet.serializer.serializer')->replaceArgument(4, $def);
            }
        ));

        $builder->addCompilerPass(new RegisterEventListenersAndSubscribersPass(), PassConfig::TYPE_BEFORE_REMOVING);
        $builder->addCompilerPass(new CustomHandlersPass(), PassConfig::TYPE_BEFORE_REMOVING);
    }


}
