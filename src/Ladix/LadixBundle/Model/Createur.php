<?php

/**
 * Description of Createur
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Createur implements CreateurInterface 
{

    /**
     *
     * @var Integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $nomCreateur;

    /**
     *
     * @var string
     */
    protected $prenomCreateur;

    /**
     *
     * @var \DateTime
     */
    protected $dateNaissanceCreateur;

    public function __construct()
    {
        ;
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
    public function getNomCreateur()
    {
        return $this->nomCreateur;
    }

    /**
     * @param type $nom
     * @return self
     */
    public function setNomCreateur($nom)
    {
        $this->nomCreateur = $nom;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenomCreateur()
    {
        return $this->prenomCreateur;
    }

    /**
     * @param type $prenom
     * @return self
     */
    public function setPrenomCreateur($prenom)
    {
        $this->prenomCreateur = $prenom;
        
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissanceCreateur()
    {
        return $this->dateNaissanceCreateur;
    }

    /**
     * @param type $date
     * @return self
     */
    public function setDateNaissanceCreateur($date)
    {
        $this->dateNaissanceCreateur = $date;
        
        return $this;
    }

}
?>

