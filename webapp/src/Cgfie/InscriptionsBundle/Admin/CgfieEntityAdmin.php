<?php

	namespace Cgfie\InscriptionsBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;
	use Sonata\AdminBundle\Validator\ErrorElement;

	class CgfieEntityAdmin extends Admin
	{
	    protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('acronym', null, array('label'=> 'Siglas'))
	            ->add('level', null, array('label'=> 'Nivel'))
	        ;
	    }

	    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	    {
	        $datagridMapper
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('acronym', null, array('label'=> 'Siglas'))
	            ->add('level', null, array('label'=> 'Nivel'))
	        ;
	    }

	    protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->addIdentifier('acronym', null, array('label'=> 'Siglas'))
	            ->add('name', null, array('label'=> 'Nombre'))
	            ->add('level', null, array('label'=> 'Nivel'))
	        ;
	    }

	}