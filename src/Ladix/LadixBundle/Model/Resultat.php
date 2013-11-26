<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Resultat
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Resultat implements ResultatInterface 
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
    protected $labelResultat;

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
    public function getLabelResultat()
    {
        return $this->labelResultat;
    }

    /**
     * @param type $label
     * @return self
     */
    public function setLabelResultat($label)
    {
        $this->labelResultat = $label;

        return $this;
    }

}
?>

