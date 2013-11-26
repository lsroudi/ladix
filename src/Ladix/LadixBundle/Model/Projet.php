<?php

/**
 * Description of Projet
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Projet implements ProjetInterface 
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
    protected $nomProjet;
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
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * @param type $nom
     * @return self
     */
    public function setNomProjet($nom)
    {
        $this->nomProjet = $nom;
        
        return $this;
    }
}
?>

