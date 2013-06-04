<?php

namespace Cgfie\InscriptionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityRepository;

use Cgfie\InscriptionsBundle\Entity\Inscription;
use Cgfie\InscriptionsBundle\Entity\CgfieEntity;


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

        $AGREE = array(
                        'Acreditó'    => 1, 
                        'No Acreditó' => 0
                      );
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

    public function addinscriptionAction(Request $request)
    {

        $course_id      = $request->request->get('course_id');
        $entity_id      = $request->request->get('entity_id');
        $teacher_id     = $request->request->get('teacher_id');

        if($course_id == null || $course_id < 1)
        {
            throw new \Exception('No se especificó el id de curso');
        }
        if($entity_id == null || $entity_id < 1)
        {
            throw new \Exception('No se especificó el id de sede');
        }
        if($teacher_id == null || $teacher_id < 1)
        {
            throw new \Exception('No se especificó el id de facilitador');
        }

        $course         = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:Course')->find($course_id);
        $cgfieentity    = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:CgfieEntity')->find($entity_id);
        $teacher        = $this->getDoctrine()->getRepository('CgfieInscriptionsBundle:CgfieUsers')->find($teacher_id);
        

        if(!$course)
        {
            throw new \Exception('No existe el curso.');   
        }

        if(!$cgfieentity)
        {
            throw new \Exception('No existe la sede.');   
        }

        if(!$teacher)
        {
            throw new \Exception('No existe el facilitador.');   
        }

        $inscription = new Inscription();            
        $inscription->setCourse($course);
        $inscription->setCgfieEntity($cgfieentity);
        $inscription->setTeacher($teacher);
        $inscription->setBeginDate(new \DateTime($request->request->get('begin')));
        $inscription->setEndDate(new \DateTime($request->request->get('end')));
            
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($inscription);
        $em->flush();

        if($inscription->getId() < 1)
        {
             throw new \Exception('Hubo un error al guardar el formato.');           
        }

        //save pupils

        $PUPILS     = $request->request->get('pupils');
        if(count($PUPILS) > 0)
        {
            foreach ($PUPILS as $pupil) 
            {

                //$em = $this->getDoctrine()->getEntityManager();
                $USERS = $this->getDoctrine()
                              ->getRepository('CgfieInscriptionsBundle:InscriptionUsers')
                              ->findByInscription($inscription);

                if(count($USERS) > 0)
                {
                    foreach ($USERS as $user) 
                    {
                        $em->remove($user);
                    }
                    
                    $em->flush();                    
                }


                /*
                    array(1) {
                      [0]=>
                      array(4) {
                        ["id"]=>
                        string(1) "1"
                        ["asistencia"]=>
                        string(1) "5"
                        ["acreditacion"]=>
                        string(1) "0"
                        ["calificacion"]=>
                        string(1) "0"
                      }
                    }

                */
                
            }   
        }

        return new Response(var_dump($PUPILS));

        //$serializer = $this->container->get('serializer');
        //return new Response($serializer->serialize($inscription, 'json'));

    }
}
