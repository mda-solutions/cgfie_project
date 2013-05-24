<?php
	namespace Cgfie\InscriptionsBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Acme\HelloBundle\Entity\User;

	class LoadCgfieUsersData implements FixtureInterface
	{
	    /**
	     * {@inheritDoc}
	     */
	    public function load(ObjectManager $manager)
	    {

	    	$names = array(
							'MARIA',
							'MARIA CARMEN',
							'JOSEFA',
							'CARMEN',
							'MARIA DOLORES',
							'FRANCISCA',
							'MARIA TERESA',
							'ISABEL',
							'ANTONIA',
							'DOLORES',
							'MARIA JOSE',
							'ANA MARIA',
							'ANA',
							'LAURA',
							'CONCEPCION',
							'MARIA ANGELES',
							'CRISTINA',
							'TERESA',
							'ENCARNACION',
							'MARIA ISABEL',
							'MARIA PILAR',
							'LUCIA',
							'RAQUEL',
							'ROSARIO',
							'MANUELA',
							'ELENA',
							'ROSA MARIA',
							'ROSA',
							'PAULA',
							'MARIA LUISA',
							'PILAR',
							'ANDREA',
							'JUANA',
							'ANGELA',
							'SARA',
							'IRENE',
							'MERCEDES',
							'PATRICIA',
							'MARTA',
							'ANGELES',
							'ASUNCION',
							'SILVIA',
							'VERONICA',
							'BEATRIZ',
							'MARINA',
							'MARIA JESUS',
							'NATALIA',
							'INMACULADA',
							'ALBA',
							'ALICIA',
							'JAVIER',
							'FRANCISCO JAVIER',
							'JOSE ANTONIO',
							'JOSE MARIA',
							'JESUS',
							'ANTONIO',
							'JOSE',
							'AITOR',
							'DAVID',
							'MANUEL',
							'MIKEL',
							'FRANCISCO',
							'IKER',
							'FERNANDO',
							'MIGUEL ANGEL',
							'ASIER',
							'ANGEL',
							'JON',
							'IÑIGO',
							'CARLOS',
							'ROBERTO',
							'ALBERTO',
							'JUAN CARLOS',
							'JOSE IGNACIO',
							'UNAI',
							'OSCAR',
							'LUIS',
							'EDUARDO',
							'DANIEL',
							'PEDRO',
							'SERGIO',
							'JOSE MANUEL',
							'PABLO',
							'ANDER',
							'JESUS MARIA',
							'IÑAKI',
							'JUAN',
							'JUAN JOSE',
							'IGNACIO',
							'RUBEN',
							'RAUL',
							'GORKA',
							'JORGE',
							'FELIX',
							'ALVARO',
							'MIGUEL',
							'IVAN',
							'ENRIQUE',
							'XABIER'
					);


	        $userAdmin = new User();
	        $userAdmin->setUsername('admin');
	        $userAdmin->setPassword('test');

	        $manager->persist($userAdmin);
	        $manager->flush();
	    }
	}