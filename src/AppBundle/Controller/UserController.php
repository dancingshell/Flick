<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function createAction(Request $request) {
        //get parameters
        $email = $request->get('email');
        $password = $request->get('password');
        $firstName = $request->get('first');
        $lastName = $request->get('last');

        if ($email && $password && $firstName && $lastName) {
            //check if email already exists
            if(!$this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(['email' => $email])) {
                $user = new User();
                $user->setEmail($email);
                $user->setFirstName($firstName);
                $user->setLastName($lastName);
                $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return new Response('created a user');
            }

            return new Response('email exists');
        }

        return new Response('missing parameters');
    }

    public function getAction($id) {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return new JsonResponse($user);
    }
}