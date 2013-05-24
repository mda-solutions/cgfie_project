<?php
	namespace Cgfie\InscriptionsBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Cgfie\InscriptionsBundle\Entity\Course;

	class LoadCourseData implements FixtureInterface
	{
	    /**
	     * {@inheritDoc}
	     */
	    public function load(ObjectManager $manager)
	    {

	    	

	    	for ($i=0; $i < 50; $i++) 
	    	{ 

		    	$course = new Course();
		    	$course->setname('Curso'.$i);
		    	$course->setMode('Mixta');
		    	$course->setType('Diplomado');
		    	$course->setCur('CurDummy00'.$i);
		    	$course->setHours(120);

		    	$manager->persist($course);
			    $manager->flush();	

	    	}
	    }

	}