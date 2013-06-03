<?php

	namespace Cgfie\InscriptionsBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;
	use Sonata\AdminBundle\Validator\ErrorElement;

	class CgfieUsersAdmin extends Admin
	{
	    protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('lastname', null, array('label'=> 'Apellido Paterno'))
	            ->add('lastname2', null, array('label'=> 'Apellido Materno'))
	            ->add('employee_number', null, array('label'=> '# de Empleado'))
	            ->add('email', null, array('label'=> 'Email'))
	            ->add('email_ipn', null, array('label'=> 'Email IPN'))
	            ->add('gender', 'choice', array('label' => 'Sexo','choices' => CgfieUsersConfig::getGender()))
	            ->add('level', 'choice', array('label' => 'Nivel','choices' => CgfieUsersConfig::getLevel()))
	            ->add('type', 'choice', array('label' => 'Tipo de Usuario','choices' => CgfieUsersConfig::getType()))	            
	            ->add('is_teacher', null, array('label' => 'Es facilitador?'))
	            ->add('cgfie_entity', 'sonata_type_model', array('label' => 'Unidad de Procedencia'), array())
	        ;
	    }

	    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	    {
	        $datagridMapper
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('lastname', null, array('label'=> 'Paterno'))
	            ->add('lastname2', null, array('label'=> 'Materno'))
	            ->add('employee_number', null, array('label'=> '# Empleado'))
	            ->add('email', null, array('label'=> 'Email'))
	            ->add('email_ipn', null, array('label'=> 'Email IPN'))
	            //->add('gender', null, array('label'=> 'Sexo', 'choices'=> CgfieUsersConfig::getGender()))
	            //->add('level')
	            //->add('type')	
	        ;
	    }

	    protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->addIdentifier('employee_number', null, array('label'=> '# Empleado'))	            
	            ->add('lastname', null, array('label'=> 'Paterno'))
	            ->add('lastname2', null, array('label'=> 'Materno'))
	            ->add('name', null, array('label'=> 'Nombre'))	
	        ;
	    }

	    public function validate(ErrorElement $errorElement, $object)
	    {
	        $errorElement
	            ->with('name')
	                ->assertMaxLength(array('limit' => 100))
	            ->end()
	            ->with('lastname')
	                ->assertMaxLength(array('limit' => 100))
	            ->end()
	            ->with('lastname2')
	                ->assertMaxLength(array('limit' => 100))
	            ->end()	  
	         ;  	
	    }	    
	}

	class CgfieUsersConfig
	{
		static public function getGender()
		{
			return array('Masculino', 'Femenino');
		}

		static public function getLevel()
		{
			return array(
				'Nivel Medio Superior',
				'Superior',
				'Área Central',
				'Centros de Investigación',
				'Externo Nacional',
				'Externo Internacional',
				'Posgrado'
			);
		}

		static public function getType()
		{
			return array('Docente', 'Directivo', 'PAAE');
		}
	}