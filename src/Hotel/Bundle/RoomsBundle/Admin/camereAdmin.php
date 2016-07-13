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
            ->add('fotocamera')
            ->add('fotocamera1')
            ->add('fotocamera2')
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
            ->add('fotocamera')
            ->add('fotocamera1')
            ->add('fotocamera2')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
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
            ->add(
                'fotocamera',
                'ckeditor',
                array(
                  'config' => array(
                    'toolbar' => 'full'
                  )
                )
              )
            ->add('fotocamera1')
            ->add('fotocamera2')
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
            ->add('fotocamera')
            ->add('fotocamera1')
            ->add('fotocamera2')
        ;
    }
}
