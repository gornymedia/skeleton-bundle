<?php

namespace Gornymedia\SkeletonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('gornymedia_skeleton');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('dsn')->defaultValue('%env(GORNYMEDIA_SKELETON_SOME_VARIABLE)%')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}