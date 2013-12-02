<?php

namespace Ladix\LadixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ladix\LadixBundle\Entity\Question;

class QuestionController extends Controller
{

    public function createAction(Request $request)
    {
        /** @var $formFactory Ladix\LadixBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('ladix.question.account_create.form.factory');
        /** @var $createurManager Ladix\LadixBundle\EntityManager\CreateurManager */
//        $createurManager = $this->container->get('ladix.createur.manager');


        $question = new Question();



        $form = $formFactory->createForm();
        $form->setData($question);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {

                

               
                
            }
        }

        return $this->container->get('templating')->renderResponse('LadixBundle:Createur:create.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
        ));
    }
    
    private function getEngine()
    {
        return $this->container->getParameter('ladix.template.engine');
    }
}
