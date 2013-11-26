<?php

/**
 * Description of CreateurInterface
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

interface CreateurInterface {

    /**
     * @return integer
     */
    public function getId();

    /**
     * @return String
     */
    public function getNomCreateur();

    /**
     * @param type $nom
     * @return self
     */
    public function setNomCreateur($nom);

    /**
     * @return String
     */
    public function getPrenomCreateur();

    /**
     * @param type $prenom
     * @return self
     */
    public function setPrenomCreateur($prenom);

    /**
     * @return Date
     */
    public function getDateNaissanceCreateur();

    /**
     * @param type $date
     * @return self
     */
    public function setDateNaissanceCreateur($date);
}

?>
