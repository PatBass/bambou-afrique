<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Form\Type\AddressType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('gender', 'choice', array(
            'choices' => array(
                'M' => 'M.',
                'Mme' => 'Mme.'
            ),
            'multiple' => false,
            'expanded' => true
        ))
            ->add('birthday', 'date', array(
                'label'  => 'Date de naissance :',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr'   => array('class' => 'date_format', 'type' => 'text')
            ))
            ->add('nationality', 'text', array(
                'label' => 'Nationalité :',
                'attr'  => array('placeholder' => 'Nationalité...')
            ))
            ->add('address', new AddressType(), array(
                'label' => 'Adresse :'
            ))
            ->add('firstname', 'text', array(
                'label' => 'Prénoms au complet dans l\'ordre de l\'état civil :',
                'attr'  => array('placeholder' => 'Prénoms...')
            ))
            ->add('lastname', 'text', array(
                'label' => 'Nom :',
                'attr'  => array('placeholder' => 'Nom...')
            ))
            ->add('phone', 'text', array(
                'label' => 'Téléphone :',
                'attr'  => array('placeholder' => 'Téléphone...')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'bambou_user';
    }
}
