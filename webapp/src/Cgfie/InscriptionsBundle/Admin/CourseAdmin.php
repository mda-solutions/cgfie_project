<?php

	namespace Cgfie\InscriptionsBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;
	use Sonata\AdminBundle\Validator\ErrorElement;

	class CourseAdmin extends Admin
	{
	    protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('mode', 'choice', array('label' => 'Modalidad','choices' => CourseConfig::getModes()))
	            ->add('cur', null, array('label'=> 'Clave Unica de Registro'))
	            ->add('hours', null, array('label'=> 'Duración (Hrs)'))

	        ;
	    }

	    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	    {
	        $datagridMapper
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('mode', null, array('label'=> 'Modalidad'))
	            ->add('cur', null, array('label'=> 'CUR'))

	        ;
	    }

	    protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->addIdentifier('cur', null, array('label'=> 'CUR'))
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('mode', null, array('label'=> 'Modalidad'))

	        ;
	    }
	    
	}

	class CourseConfig
	{
		static public function getModes()
		{
			return array('Escolarizada', 'Mixta', 'No Escolarizada');
		}
	}