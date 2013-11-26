<?php

/**
 * Description of Groupe
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Groupe implements GroupeInterface 
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $labelGroupe;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getLabelGroupe()
    {
        return $this->labelGroupe;
    }

    /**
     * @param type $label
     * @return self
     */
    public function setLabelGroupe($label)
    {
        $this->labelGroupe = $label;
        
        return $this;
    }

}
?>

