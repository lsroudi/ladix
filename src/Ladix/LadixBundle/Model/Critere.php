<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Critere
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Critere implements CritereInterface 
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
    protected $labelCritere;
    

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabelCritere()
    {
        return $this->labelCritere;
    }

    /**
     * @param type $label
     * @return self
     */
    public function setLabelCritere($label)
    {
        $this->labelCritere = $label;
        
        return $this;
    }
}
?>

