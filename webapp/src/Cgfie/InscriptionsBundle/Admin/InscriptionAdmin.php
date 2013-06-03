<?php

	namespace Cgfie\InscriptionsBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;
	use Sonata\AdminBundle\Validator\ErrorElement;

	class InscriptionAdmin extends Admin
	{
	    protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	            ->add('course', 'sonata_type_model', array('label' => 'Acción de Formación'), array())
	            ->add('cgfie_entity', 'sonata_type_model', array('label' => 'Sede'), array())
	            ->add('teacher', 'sonata_type_model', array('label' => 'Facilitador'), array())
	            ->add('begin_date', 'date', array('label' => 'Fecha de Inicio'), array())
	            ->add('end_date', 'date', array('label' => 'Fecha de Fin'), array())
	        ;
	    }

	    protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->addIdentifier('course', null, array('label'=> 'Acción de Formación'))
	        ;
	    }

	}