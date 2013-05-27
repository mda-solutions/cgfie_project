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

        $PERCENTS = array();
        for ($i=0; $i < 105 ; $i += 5) 
        { 
            array_push($PERCENTS, $i);
        }

        $AGREE = array('ACREDITÓ', 'NO ACREDITÓ');
        $CALS  = array( 
                        '0 (CERO)'      => 0,
                        '1 (UNO)'       => 1,
                        '2 (DOS)'       => 2,
                        '3 (TRES)'      => 3,
                        '4 (CUATRO)'    => 4,
                        '5 (CINCO)'     => 5,
                        '6 (SEIS)'      => 6,
                        '7 (SIETE)'     => 7,
                        '8 (OCHO)'      => 8,
                        '9 (NUEVE)'     => 9,
                        '10 (DIEZ)'     => 10,
                        );

    	return $this->render('CgfieInscriptionsBundle:Default:format06.html.twig', 
                                                                                array(

                                                                                    'COURSES'=> $COURSES,
                                                                                    'USERS'  => $USERS,
                                                                                    'ENTITTIES'=> $ENTITTIES,
                                                                                    'PERCENTS'=> $PERCENTS,
                                                                                    'AGREE'=> $AGREE,
                                                                                    'CALS'=> $CALS

                                                                                    ));
    }


    public function coursesAction($id)
    {
    	$course = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:Course')->find($id);
    	$serializer = $this->container->get('serializer');
    	return new Response($serializer->serialize($course, 'json'));
    }
}
