<?php

namespace Progrupa\MailjetBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('progrupa_mailjet')
            ->children()
                ->arrayNode('api_auth')->isRequired(true)->prototype('scalar')->end()->end()
                ->scalarNode('debug_recipient')->defaultValue(false)->end()
            ->end();

        return $treeBuilder;
    }
}
