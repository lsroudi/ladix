<?php

/**
 * Description of newPHPClass
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

interface ResultatInterface {

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return String
     */
    public function getLabelResultat();

    /**
     * @param type $label
     * @return self
     */
    public function setLabelResultat($label);
}

?>
