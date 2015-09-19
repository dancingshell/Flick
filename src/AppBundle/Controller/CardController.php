<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Card;
use AppBundle\Entity\Connection;

class CardController extends Controller
{
    public function createAction(Request $request)
    {
        //get mandatory parameters
        $userId = $request->get('owner');
        $categoryId = $request->get('category');

        if ($userId && $categoryId) {
            $em = $this->getDoctrine()->getManager();
            $card = new Card();
            $card->setUserId($em->getRepository('AppBundle:User')->findOneBy(array('id' => $userId)));
            $card->setCategoryId($em->getRepository('AppBundle:Category')->findOneBy(array('id' => $categoryId)));

            //get and set optional parameters
            $card->setEmail($request->get('email'));
            $card->setCompanyName($request->get('company'));
            $card->setStreet1($request->get('street1'));
            $card->setStreet2($request->get('street2'));
            $card->setCity($request->get('city'));
            $card->setState($request->get('state'));
            $card->setCountry($request->get('country'));
            $card->setPhoneMobile($request->get('mobile'));
            $card->setPhoneBusiness($request->get('business'));
            $card->setPhoneFax($request->get('fax'));
            $card->setPhoneHome($request->get('home'));
            $card->setWebsite($request->get('website'));
            $card->setFacebook($request->get('facebook'));
            $card->setTwitter($request->get('twitter'));
            $card->setLogo($request->get('logo'));

            $em->persist($card);
            $em->flush();
            $newId = $card->getId();

            return new JsonResponse(array('created a card with id: ' . $newId, 200));
        }

        return new JsonResponse(array('missing parameters: ', 403));
    }

    public function shareAction(Request $request)
    {
        $cardId = $request->get('id');
        $receiverId = $request->get('userId');

        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('AppBundle:Card')->findOneBy(array('id' => $cardId));
        $cardOwnerId = $card->getUserId()->getId();

        if (!$em->getRepository('AppBundle:Connection')->findOneBy(array('sender_id' => $cardOwnerId, 'recipient_id' => $receiverId))) {
            $connection = new Connection();
            $connection->setSenderId($em->getRepository('AppBundle:User')->findOneBy(array('id' => $cardOwnerId)));
            $connection->setRecipientId($em->getRepository('AppBundle:User')->findOneBy(array('id' => $receiverId)));

            $em->persist($connection);
            $em->flush();

            return new JsonResponse(array('created a connection', 200));
        }

        return new JsonResponse(array('connection already exists', 406));
    }

    public function getCardAction(Request $request)
    {
        $cardId = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('AppBundle:Card')->findOneBy(array('id' => $cardId));

        if ($card) {
            return new JsonResponse($card);
        }

        return new JsonResponse('could not find card', 404);
    }

    public function getDeckAction(Request $request)
    {
        $userId = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $cards = $em->getRepository('AppBundle:Connection')->findBy(array('recipient_id' => $userId));

        return new JsonResponse(array($cards, 200));
    }
}