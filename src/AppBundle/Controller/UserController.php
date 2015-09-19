<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    public function createAction(Request $request)
    {
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
                return new JsonResponse(array('created a user', 200));
            }

            return new JsonResponse(array('email exists', 406));
        }

        return new JsonResponse(array('missing parameters', 403));
    }

    public function loginAction(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        /**
         * @var $user User
         */
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(['email' => $email]);

        if (!password_hash($password, PASSWORD_DEFAULT) == $user->getPassword() || !$user) {
            return new JsonResponse(array('incorrect parameters', 404));
        }

        return new JsonResponse(array('logged in user ' . $user->getId(), 200));
    }

    public function getAction($id)
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id '. $id
            );
        }

        return new JsonResponse(array($user, 200));
    }
}