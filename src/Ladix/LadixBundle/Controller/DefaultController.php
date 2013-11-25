<?php

namespace Ladix\LadixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LadixBundle:Default:index.html.twig', array('name' => $name));
    }
}
