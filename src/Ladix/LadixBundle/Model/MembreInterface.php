<?php

/**
 * Description of MembreInterface
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

interface MembreInterface 
{

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return String
     */
    public function getNomMembre();

    /**
     * @param type $nom
     * @return self
     */
    public function setNomMembre($nom);

    /**
     * @return String
     */
    public function getPrenomMembre();

    /**
     * @param type $prenom
     * @return self
     */
    public function setPrenomMembre($prenom);
}

?>
