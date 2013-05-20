<?php

namespace Cgfie\InscriptionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CgfieInscriptionsBundle:Default:index.html.twig', array('name' => $name));
    }
}
