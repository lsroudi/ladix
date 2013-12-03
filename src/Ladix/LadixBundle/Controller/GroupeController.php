<?php

namespace Ladix\LadixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ladix\LadixBundle\Entity\Groupe;

class GroupeController extends Controller
{

    public function createAction(Request $request)
    {
        /** @var $formFactory Ladix\LadixBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('ladix.groupe.account_create.form.factory');
        /** @var $createurManager Ladix\LadixBundle\EntityManager\CreateurManager */
//        $createurManager = $this->container->get('ladix.createur.manager');


        $groupe = new Groupe();



        $form = $formFactory->createForm();
        $form->setData($groupe);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {

                

               
                
            }
        }

        return $this->container->get('templating')->renderResponse('LadixBundle:Groupe:create.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
        ));
    }
    
    private function getEngine()
    {
        return $this->container->getParameter('ladix.template.engine');
    }
}
