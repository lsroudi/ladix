<?php

/**
 * Description of Question
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladix\LadixBundle\Model;

abstract class Question implements QuestionInterface {

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var type 
     */
    protected $labelQuestion;

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
    public function getLabelQuestion()
    {
        return $this->labelQuestion;
    }

    /**
     * @param type $label
     * @return self
     */
    public function setLabelQuestion($label)
    {
        $this->labelQuestion = $label;
        
        return $this;
    }

}
?>

