<?php

namespace MainBundle\Form;

use MainBundle\Repository\ProductRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search',       'text')


        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mainbundle_search';
    }
}
