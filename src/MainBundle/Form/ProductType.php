<?php

namespace MainBundle\Form;

use MainBundle\Repository\ProductRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',       'text')
            ->add('description',     'ckeditor')
            ->add('image',        new ImageType(), array('required' => false))
            ->add('vat',       'number')
            ->add('price',       'number')
            ->add('categories',  'text', array(
                'class'       => 'MainBundle:Category',
                'property'    => 'name',
                'multiple'    => true,
                'expanded'    => false

            ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Product'
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
