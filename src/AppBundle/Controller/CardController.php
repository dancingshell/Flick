<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Cards;

class CardController extends Controller
{
    public function createAction(Request $request)
    {
        $card = new Cards;
        $request->get('test');
        // create a task and give it some dummy data for this example
        $card->setCity('Write a blog post');
        $card->setEmail('poop');

        $form = $this->createFormBuilder($card)
            ->add('city', 'text')
            ->add('email', 'text')
            ->add('save', 'submit', array('label' => 'Create Card'))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->getDoctrine()->getManager()->persist($form->getViewData());

            return $this->redirectToRoute('/');
        }

        return $this->render('/');

//        $card->setCity('Dubai');
//        $this->getDoctrine()->getManager()->persist($card);
//        $html = $this->container->get('templating')->render(
//            'card/new.html.twig',
//            array(
//                'numbers' => [1,2,3],
//                'categories' =>  $this->getDoctrine()->getRepository('AppBundle:Categories')->findAll()
//            )
//        );
//        return new Response($html);
    }
}