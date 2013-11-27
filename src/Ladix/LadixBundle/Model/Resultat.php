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
     * @var text
     */
    protected $resultat;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return text
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * @param type $resultat
     * @return self
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

}
?>

