<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}", defaults={"name" = "Symfony Microframework!"})
     */
    public function indexAction($name)
    {
        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }
}
