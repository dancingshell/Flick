<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\AclBundle\Entity\Car;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Card;

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

            return new Response('created a card with id: ' . $newId);
        }

        return new Response('missing parameters');
    }
}