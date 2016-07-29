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
            ->add('media' )
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
                 'label'=> 'carica immagine 1',
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'camere'
            ))
            ->add('media1', 'sonata_media_type', array(
                 'label'=> 'carica immagine 2',
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'camere'
            ))
                
            ->add('media2', 'sonata_media_type', array(
                 'label'=> 'carica immagine 3',
                 'provider' => 'sonata.media.provider.image',
                 'context'  => 'camere'
            ))
            ->add('media3', 'sonata_media_type', array(
                 'label'=> 'inserisci url video youtube 1',
                 'provider' => 'sonata.media.provider.youtube',
                 'context'  => 'camere'
            ))
          
        ;
            $formMapper->get('media')->add('unlink', 'hidden', ['mapped' => false, 'data' => false]) 
                       ->add('binaryContent', 'file', ['label' => false]);
            $formMapper->get('media1')->add('unlink', 'hidden', ['mapped' => false, 'data' => false])
                       ->add('binaryContent', 'file', ['label' => false]); 
            $formMapper->get('media2')->add('unlink', 'hidden', ['mapped' => false, 'data' => false])
                       ->add('binaryContent', 'file', ['label' => false]);
            $formMapper->get('media3')->add('unlink', 'hidden', ['mapped' => false, 'data' => false])
                       ->add('binaryContent', 'url', ['label' => false]); 
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
            ->add('media' ,'null', array( 'label'=> ' immagine 1',))
            ->add('media1' ,'null', array( 'label'=> ' immagine 2',))
            ->add('media2' ,'null', array( 'label'=> ' immagine 3',))
            ->add('media3' ,'null', array( 'label'=> ' video 1',))
        ;
    }
}
