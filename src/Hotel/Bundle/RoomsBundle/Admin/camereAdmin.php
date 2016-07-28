<?php

namespace Hotel\Bundle\RoomsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class camereAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('numerocamera')
            ->add('tipocamera')
            ->add('media')
            ->add('media1')
            ->add('media2')
            ->add('media3')
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('numerocamera')
            ->add('tipocamera')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            )) 
             ->add('media', 'string', array('template' => 'SonataMediaBundle:MediaAdmin:list_image.html.twig'))
             ->add('media1', 'string', array('template' => 'SonataMediaBundle:MediaAdmin:list_image.html.twig'))
             ->add('media2', 'string', array('template' => 'SonataMediaBundle:MediaAdmin:list_image.html.twig'))
             ->add('media3', 'string', array('template' => 'SonataMediaBundle:MediaAdmin:list_image.html.twig'))
                ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('numerocamera')
            ->add('tipocamera')
            ->add('media', 'sonata_media_type', array(
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'camere'
            ))
            ->add('media1', 'sonata_media_type', array(
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'camere'
            ))
            ->add('media2', 'sonata_media_type', array(
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'camere'
            ))
            ->add('media3', 'sonata_media_type', array(
                 'provider' => 'sonata.media.provider.youtube',
                 'context'  => 'camere'
            ))    
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('numerocamera')
            ->add('tipocamera')
            ->add('media')
            ->add('media1')
            ->add('media2')
            ->add('media3')
        ;
    }
}
