<?php

namespace Sexyboys\InflexibleBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 * @author Eric Pidoux
 * @author Boris Guéry
 * @version 1.0
 */
class SexyboysInflexibleExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $debug = false;
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        //Load all extensions in array

        //check extensions from config file and disable those defined.
        foreach($config['extensions'] as $name=>$extension)
        {
            if(strlen($name)>0  )
            {

            }
        }

        $container->setParameter('inflexible.extensions', $config['services']);
        if(array_key_exists("callback_url",$config)) $container->setParameter("oauth.callback",$config['callback_url']);
        if(array_key_exists("debug",$config)) $debug = $config['debug'];

        $container->setParameter("oauth.debug",$debug);
    }
    public function getAlias()
    {
        return 'inflexible';
    }
}
