<?php

/**
 * Description of FamilleInterface
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

interface FamilleInterface 
{

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return String
     */
    public function getLabelFamille();

    /**
     * @param type $nom
     * @return self
     */
    public function setLabelFamille($nom);
}

?>
