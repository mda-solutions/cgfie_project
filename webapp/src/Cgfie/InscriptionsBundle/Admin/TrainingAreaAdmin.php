<?php

	namespace Cgfie\InscriptionsBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;
	use Sonata\AdminBundle\Validator\ErrorElement;

	class TrainingAreaAdmin extends Admin
	{
	    protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	            ->add('name', null, array('label'=> 'Nombre'))
	        ;
	    }

	    protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->addIdentifier('name', null, array('label'=> 'Nombre'))
	        ;
	    }

	}