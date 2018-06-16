<?php

namespace MainBundle\Form;

use MainBundle\Repository\ProductRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SpecialitylistType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',       'text')
            ->add('specialitylistFile',        'vich_file', array(
                'mapping'       => 'specialitylist_images',
                'allow_delete'  => true,
                'download_link' => true,
                'label' => false,
            ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Specialitylist'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mainbundle_product';
    }
}
