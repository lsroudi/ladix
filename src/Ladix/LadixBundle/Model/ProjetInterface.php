<?php

/**
 * Description of ProjetInterface
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

interface ProjetInterface 
{

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return String
     */
    public function getNomProjet();

    /**
     * @param type $nom
     * @return self
     */
    public function setNomProjet($nom);
}

?>
