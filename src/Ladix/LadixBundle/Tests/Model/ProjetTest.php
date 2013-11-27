<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjetTest extends WebTestCase {

    public function testLabelGroupe()
    {
        $projet = $this->getProjet();
        $this->assertNull($projet->getNomProjet());

        $projet->setNomProjet('Nom projet 1');
        $this->assertEquals('Nom projet 1', $projet->getNomProjet());
    }

    /**
     * @return Groupe
     */
    protected function getProjet()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Projet');
    }

}
