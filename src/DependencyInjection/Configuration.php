<?php

namespace Elyanor\Bundle\SkeletonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder->root('elyanor_skeleton')
            ->children()
                ->scalarNode('argument_1')->isRequired()->end()
                ->scalarNode('argument_2')->isRequired()->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
