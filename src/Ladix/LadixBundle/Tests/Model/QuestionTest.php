<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class QuestionTest extends WebTestCase {

    public function testLabelQuestion()
    {
        $projet = $this->getQuestion();
        $this->assertNull($projet->getlabelQuestion());

        $projet->setlabelQuestion('Question numéro 1');
        $this->assertEquals('Question numéro 1', $projet->getlabelQuestion());
    }

    /**
     * @return Question
     */
    protected function getQuestion()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Question');
    }

}
