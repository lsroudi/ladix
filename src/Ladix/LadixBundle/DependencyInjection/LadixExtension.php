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

        $this->remapModelCreateurParams($config, array('model' => "ladix.model.createur.%s"));
        $this->remapTemplateEngine($config);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $this->loadFormService();
        $loader->load('manager.xml');
    }

    private function remapModelCreateurParams($config, $map)
    {
        foreach ($map as $key => $value)
        {
            if (array_key_exists($key, $config)){
                foreach ($config[$key] as $v)
                {
                    if (is_array($v)){
                        foreach ($v as $k => $val){
                            $this->container->setParameter(sprintf($value, $k), $val);
                        }
                    }
                }
            }
        }
    }

    private function remapTemplateEngine($config)
    {
        $this->container->setParameter('ladix.template.engine', $config['template']['engine']);
    }
    private function loadFormService()
    {
        $laoder = new Loader\XmlFileLoader($this->container, new FileLocator(__DIR__ . '/../Resources/config/form'));
        $laoder->load('createur.xml');
    }

}
