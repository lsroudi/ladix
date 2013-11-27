<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ResultatTest extends WebTestCase {

    public function testLabelReponse()
    {
        $resultat = $this->getResultat();
        $this->assertNull($resultat->getResultat());

        $resultat->setResultat('Réponse numéro 1');
        $this->assertEquals('Réponse numéro 1', $resultat->getResultat());
    }

    /**
     * @return Reponse
     */
    protected function getResultat()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Resultat');
    }

}
