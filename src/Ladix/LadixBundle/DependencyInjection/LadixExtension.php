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

    private $container;

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $this->container = $container;
//        die(var_dump($config['model']['createur']['name']));

        $container->setParameter('ladix.model.createur.name', $config['model']['createur']['name']);
        $container->setParameter('ladix.model.createur.type', $config['model']['createur']['type']);
        $container->setParameter('ladix.model.createur.validation_groups', $config['model']['createur']['validation_groups']);
        $container->setParameter('ladix.model.createur.class', $config['model']['createur']['class']);

        $container->setParameter('ladix.model.projet.name', $config['model']['projet']['name']);
        $container->setParameter('ladix.model.projet.type', $config['model']['projet']['type']);
        $container->setParameter('ladix.model.projet.validation_groups', $config['model']['projet']['validation_groups']);
        $container->setParameter('ladix.model.projet.class', $config['model']['projet']['class']);
        
        $container->setParameter('ladix.model.structure.name', $config['model']['structure']['name']);
        $container->setParameter('ladix.model.structure.type', $config['model']['structure']['type']);
        $container->setParameter('ladix.model.structure.validation_groups', $config['model']['structure']['validation_groups']);
        $container->setParameter('ladix.model.structure.class', $config['model']['structure']['class']);
        
        $container->setParameter('ladix.model.membre.name', $config['model']['membre']['name']);
        $container->setParameter('ladix.model.membre.type', $config['model']['membre']['type']);
        $container->setParameter('ladix.model.membre.validation_groups', $config['model']['membre']['validation_groups']);
        $container->setParameter('ladix.model.membre.class', $config['model']['membre']['class']);   
        
        $container->setParameter('ladix.model.famille.name', $config['model']['famille']['name']);
        $container->setParameter('ladix.model.famille.type', $config['model']['famille']['type']);
        $container->setParameter('ladix.model.famille.validation_groups', $config['model']['famille']['validation_groups']);
        $container->setParameter('ladix.model.famille.class', $config['model']['famille']['class']);  
        
        $container->setParameter('ladix.model.critere.name', $config['model']['critere']['name']);
        $container->setParameter('ladix.model.critere.type', $config['model']['critere']['type']);
        $container->setParameter('ladix.model.critere.validation_groups', $config['model']['critere']['validation_groups']);
        $container->setParameter('ladix.model.critere.class', $config['model']['critere']['class']);   
        
        $container->setParameter('ladix.model.reponse.name', $config['model']['reponse']['name']);
        $container->setParameter('ladix.model.reponse.type', $config['model']['reponse']['type']);
        $container->setParameter('ladix.model.reponse.validation_groups', $config['model']['reponse']['validation_groups']);
        $container->setParameter('ladix.model.reponse.class', $config['model']['reponse']['class']);  
        
        $container->setParameter('ladix.model.question.name', $config['model']['question']['name']);
        $container->setParameter('ladix.model.question.type', $config['model']['question']['type']);
        $container->setParameter('ladix.model.question.validation_groups', $config['model']['question']['validation_groups']);
        $container->setParameter('ladix.model.question.class', $config['model']['question']['class']);   
        
        $container->setParameter('ladix.model.groupe.name', $config['model']['groupe']['name']);
        $container->setParameter('ladix.model.groupe.type', $config['model']['groupe']['type']);
        $container->setParameter('ladix.model.groupe.validation_groups', $config['model']['groupe']['validation_groups']);
        $container->setParameter('ladix.model.groupe.class', $config['model']['groupe']['class']);         

        $this->remapTemplateEngine($config);
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('manager.xml');

        $this->loadFormService();
        $this->loadExtensionService();
    }

    private function remapTemplateEngine($config)
    {
        $this->container->setParameter('ladix.template.engine', $config['template']['engine']);
        $this->container->setParameter('ladix.template.parent', $config['template']['parent']);
    }

    private function loadFormService()
    {
        $laoder = new Loader\XmlFileLoader($this->container, new FileLocator(__DIR__ . '/../Resources/config/form'));
        $laoder->load('createur.xml');
        $laoder->load('projet.xml');
        $laoder->load('structure.xml');
        $laoder->load('membre.xml');
        $laoder->load('famille.xml');
        $laoder->load('critere.xml');
        $laoder->load('reponse.xml');
        $laoder->load('question.xml');   
        $laoder->load('groupe.xml');        
        
    }
    private function loadExtensionService()
    {
        $laoder = new Loader\XmlFileLoader($this->container, new FileLocator(__DIR__ . '/../Resources/config/extension'));
        $laoder->load('twigextension.xml');    
        
    }

}
