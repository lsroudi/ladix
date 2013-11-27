<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StructureTest extends WebTestCase 
{

    public function testLabelReponse()
    {
        $structure = $this->getStructure();
        $this->assertNull($structure->getNomStructure());

        $structure->setNomStructure('Réponse numéro 1');
        $this->assertEquals('Réponse numéro 1', $structure->getNomStructure());
    }

    /**
     * @return Structure
     */
    protected function getStructure()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Structure');
    }

}
