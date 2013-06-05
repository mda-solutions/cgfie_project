<?php

namespace Cgfie\InscriptionsBundle\Block;

use Symfony\Component\HttpFoundation\Response;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BaseBlockService;

class Format06BlockService extends BaseBlockService
{
    public function getName()
    {
        return 'Formato de Evaluación de la Acción de Formación';
    }

    public function getDefaultSettings()
    {
        return array();
    }

    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
    }

    public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
    {
    }

    public function execute(BlockContextInterface $blockContext, Response $response = null)    
    {
        // merge settings
        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->renderResponse('CgfieInscriptionsBundle:Block:dashboard.format06.html.twig', array(
            'block'     => $block,
            'settings'  => $settings
            ), $response);
    }




}