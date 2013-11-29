<?php

/**
 * Description of CreateurManager
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\EntityManager;

use Doctrine\ORM\EntityManager;

class CreateurManager extends BaseManager implements CreateurManagerInterface 
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Returns an empty Createur instance
     *
     * @return CreateurInterface
     */
    public function createCreateur()
    {
        $class = $this->getClass();
        $createur = new $class;

        return $createur;
    }


}
?>

