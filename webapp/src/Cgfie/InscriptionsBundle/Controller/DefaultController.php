<?php

namespace Cgfie\InscriptionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CgfieInscriptionsBundle:Default:index.html.twig', array('name' => $name));
    }

    public function format06Action()
    {
		
		$COURSES       = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:Course')->findAll();
        $USERS         = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:CgfieUsers')->findAll();
        $ENTITTIES     = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:CgfieEntity')->findAll();


    	return $this->render('CgfieInscriptionsBundle:Default:format06.html.twig', 
                                                                                array(

                                                                                    'COURSES'=> $COURSES,
                                                                                    'USERS'  => $USERS,
                                                                                    'ENTITTIES'=> $ENTITTIES

                                                                                    ));
    }


    public function coursesAction($id)
    {
    	$course = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:Course')->find($id);
    	$serializer = $this->container->get('serializer');
    	return new Response($serializer->serialize($course, 'json'));
    }
}
