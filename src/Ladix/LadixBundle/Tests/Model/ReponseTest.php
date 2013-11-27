<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReponseTest extends WebTestCase {

    public function testLabelReponse()
    {
        $projet = $this->getReponse();
        $this->assertNull($projet->getLabelReponse());

        $projet->setLabelReponse('Réponse numéro 1');
        $this->assertEquals('Réponse numéro 1', $projet->getLabelReponse());
    }

    /**
     * @return Reponse
     */
    protected function getReponse()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Reponse');
    }

}
