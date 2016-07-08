<?php

namespace Hotel\Bundle\RoomsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class camereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numerocamera')
            ->add('tipocamera')
            ->add('fotocamera')
            ->add('fotocamera1')
            ->add('fotocamera2')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hotel\Bundle\RoomsBundle\Entity\camere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hotel_bundle_roomsbundle_camere';
    }
}
