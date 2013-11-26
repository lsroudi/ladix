<?php

/**
 * Description of GroupeInterface
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

interface GroupeInterface {

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return String
     */
    public function getLabelGroupe();

    /**
     * @param type $label
     * @return self
     */
    public function setLabelGroupe($label);
}

?>
