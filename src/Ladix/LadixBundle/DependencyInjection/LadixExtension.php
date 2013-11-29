<?php

namespace Ladix\LadixBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class LadixExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

//        die(var_dump($config['model']['createur']['name']));
        $container->setParameter('ladix.model.createur.name', $config['model']['createur']['name']);
        $container->setParameter('ladix.model.createur.type', $config['model']['createur']['type']);
        $container->setParameter('ladix.model.createur.validation_groups', $config['model']['createur']['validation_groups']);
        $container->setParameter('ladix.model.createur.class', $config['model']['createur']['class']);
        $container->setParameter('ladix.template.engine', $config['template']['engine']);
        
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        $loader->load('createur.xml');
        $loader->load('manager.xml');
    }
}
