<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FamilleTest extends WebTestCase {

    public function testLabelCritere()
    {
        $famille = $this->getFamille();
        $this->assertNull($famille->getLabelFamille());

        $famille->setLabelFamille('label 1');
        $this->assertEquals('label 1', $famille->getLabelFamille());
    }

    /**
     * @return Famille
     */
    protected function getFamille()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Famille');
    }

}
