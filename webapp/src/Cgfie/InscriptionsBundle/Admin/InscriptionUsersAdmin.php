<?php

	namespace Cgfie\InscriptionsBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;
	use Sonata\AdminBundle\Validator\ErrorElement;

	class InscriptionusersAdmin extends Admin
	{
	    protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	            ->add('inscription', 'sonata_type_model', array('label' => 'Formato'), array())
	        ;
	    }

	    protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->addIdentifier('inscription', null, array('label'=> 'Formato'))
	        ;
	    }

	}