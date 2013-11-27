<?php

namespace Ladix\LadixBundle\Tests\Model;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreateurTest extends WebTestCase {

    public function testNomCreateur()
    {
        $createur = $this->getCreateur();
        $this->assertNull($createur->getNomCreateur());

        $createur->setNomCreateur('lsroudi');
        $this->assertEquals('lsroudi', $createur->getNomCreateur());
    }

    public function testPrenomCreateur()
    {
        $createur = $this->getCreateur();
        $this->assertNull($createur->getPrenomCreateur());

        $createur->setPrenomCreateur('abdel');
        $this->assertEquals('abdel', $createur->getPrenomCreateur());
    }

    public function testDateNaissanceCreateur()
    {
        $createur = $this->getCreateur();
        $this->assertNull($createur->getDateNaissanceCreateur());

        $date = new \DateTime('2013-11-26');

        $createur->setDateNaissanceCreateur($date);
        $this->assertEquals($date, $createur->getDateNaissanceCreateur());
    }

    /**
     * @return Createur
     */
    protected function getCreateur()
    {
        return $this->getMockForAbstractClass('Ladix\LadixBundle\Model\Createur');
    }

}
