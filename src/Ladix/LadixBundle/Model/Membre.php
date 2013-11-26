<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Membre
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

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
     * @var $prenomMembre
     */
    protected $prenomMembre;

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
}
?>

