<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CritereTest extends WebTestCase {

    public function testLabelCritere()
    {
        $critere = $this->getCritere();
        $this->assertNull($critere->getLabelCritere());

        $critere->setLabelCritere('Critere 1');
        $this->assertEquals('Critere 1', $critere->getLabelCritere());
    }

    /**
     * @return Critere
     */
    protected function getCritere()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Critere');
    }

}
