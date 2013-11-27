<?php

/**
 * Description of Membre
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

abstract class Membre implements MembreInterface {

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string 
     */
    protected $nomMembre;

    /**
     *
     * @var Collection
     */
    protected $projets;

    /**
     *
     * @var $prenomMembre
     */
    protected $prenomMembre;

    public function __construct()
    {
        
    }

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
    public function getNomMembre()
    {
        return $this->nomMembre;
    }

    /**
     * @param type $nom
     * @return self
     */
    public function setNomMembre($nom)
    {
        $this->nomMembre = $nom;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrenomMembre()
    {
        return $this->prenomMembre;
    }

    /**
     * @param type $prenom
     * @return self
     */
    public function setPrenomMembre($prenom)
    {
        $this->prenomMembre = $prenom;

        return $this;
    }

    /**
     * 
     * @param \Ladix\LadixBundle\Model\ProjetInterface $projet
     */
    public function addProjet(ProjetInterface $projet)
    {
        if (!$this->projets->contains($projet))
        {
            $this->getProjets()->add($projet);
        }
    }

    public function getProjets()
    {
        return $this->projets ? : $this->projets = new ArrayCollection();
    }

}
?>

