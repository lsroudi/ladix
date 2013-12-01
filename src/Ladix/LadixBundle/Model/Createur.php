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
     * @var type 
     */
    protected $emailCreateur;

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
    
    /**
     *
     * @var integer 
     */
    protected $projetId;

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
     * 
     * @return type
     */
    public function getEmailCreateur()
    {
        return $this->emailCreateur;
    }
    
    /**
     * 
     * @param type $email
     * @return self
     */
    public function setEmailCreateur($email)
    {
        $this->emailemailCreateur = $email;
        
        return $this;
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
    
    /**
     * 
     * @return integer
     */
    public function getProjetId()
    {
        return $this->projetId;
    }
    
    /**
     * 
     * @param type $projetId
     * @return self;
     */
    public function setProjetId($projetId)
    {
        $this->projetId = $projetId;
        
        return $this;
    }

}
?>

