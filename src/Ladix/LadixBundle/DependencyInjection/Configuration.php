<?php

namespace Ladix\LadixBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ladix');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode
                ->children()
                    ->arrayNode('template')
                        ->children()
                            ->scalarNode('engine')->defaultValue('twig')
                ->end();
        
        $this->addCreateursection($rootNode);
        
        return $treeBuilder;
               
    }
    private function addCreateursection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('model')
                    ->children()
                        ->arrayNode('createur')
                            ->children()
                                ->scalarNode('class')->defaultValue('Ladix\LadixBundle\Entity\Createur')->end()
                                ->scalarNode('type')->defaultValue('Ladix_Createur')->end()
                                ->scalarNode('name')->defaultValue('ladix_createur_form')->end()
                                ->arrayNode('validation_groups')
                                    ->prototype('scalar')->end()
                                    ->defaultValue(array('Profile', 'Default'))
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

}
