<?php

/**
 * Description of BaseManager
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\EntityManager;

abstract class BaseManager 
{

    protected $objectManager;

    protected function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

}
?>

