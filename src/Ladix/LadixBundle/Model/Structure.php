<?php

/**
 * Description of Structure
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Structure implements StructureInterface 
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
    protected $nomStructure;

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
    public function getNomStructure()
    {
        return $this->nomStructure;
    }

    /**
     * @param type $nom
     * @return self
     */
    public function setNomStructure($nom)
    {
        $this->nomStructure = $nom;

        return $this;
    }

}
?>

