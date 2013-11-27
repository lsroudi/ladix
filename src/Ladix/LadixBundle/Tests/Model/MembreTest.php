<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MembreTest extends WebTestCase 
{

    public function testNomMembre()
    {
        $membre = $this->getMembre();
        $this->assertNull($membre->getNomMembre());

        $membre->setNomMembre('Nom 1');
        $this->assertEquals('Nom 1', $membre->getNomMembre());
    }

    public function testPrenomMembre()
    {
        $membre = $this->getMembre();
        $this->assertNull($membre->getPrenomMembre());

        $membre->setPrenomMembre('Prenom 1');
        $this->assertEquals('Prenom 1', $membre->getPrenomMembre());
    }

    /**
     * @return Membre
     */
    protected function getMembre()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Membre');
    }

}
