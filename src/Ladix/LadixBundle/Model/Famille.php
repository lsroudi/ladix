<?php

/**
 * Description of Famille
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Famille implements FamilleInterface 
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
    protected $labelFamille;

    /**
     * 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabelFamille()
    {
        return $this->labelFamille;
    }

    /**
     * @param type $nom
     * @return self
     */
    public function setLabelFamille($nom)
    {
        $this->labelFamille = $nom;
        
        return $this;
    }

}
?>

