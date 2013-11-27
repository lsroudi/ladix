<?php

/**
 * Description of Reponse
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

class Reponse 
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
    protected $labelReponse;

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
    public function getLabelReponse()
    {
        return $this->labelReponse;
    }

    /**
     * @param type $label
     * @return self
     */
    public function setLabelReponse($label)
    {
        $this->labelReponse = $label;
    }

}
?>

