<?php

/**
 * Description of Createur
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

class GlobalExtension extends \Twig_Extension 
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getName()
    {
        return 'globalextension';
    }

    public function getGlobals()
    {
        return array('twigparent' => $this->container->getParameter('ladix.template.parent') );
    }

}