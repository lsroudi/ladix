<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GroupeTest extends WebTestCase {

    public function testLabelGroupe()
    {
        $groupe = $this->getGroupe();
        $this->assertNull($groupe->getLabelGroupe());

        $groupe->setLabelGroupe('label 1');
        $this->assertEquals('label 1', $groupe->getLabelGroupe());
    }

    /**
     * @return Groupe
     */
    protected function getGroupe()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Groupe');
    }

}
