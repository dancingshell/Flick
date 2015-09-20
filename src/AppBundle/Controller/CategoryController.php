<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategoryController extends Controller
{
    public function listAction()
    {
        return new JsonResponse(
            $this->getDoctrine()->getRepository('AppBundle:Category')->findAll()
        );
    }
}