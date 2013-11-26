<?php

/**
 * Description of CritereInterface
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

interface CritereInterface 
{

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return string
     */
    public function getLabelCritere();

    /**
     * @param type $label
     * @return self
     */
    public function setLabelCritere($label);
}

?>
