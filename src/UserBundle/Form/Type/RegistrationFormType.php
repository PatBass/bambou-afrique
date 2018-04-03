<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use UserBundle\Form\Type\AddressType;


class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('gender', 'choice', array(
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
            ->add('address', new \UserBundle\Form\Type\AddressType(), array(
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
            ->add('email', 'email', array(
                'label' => 'E-mail :',
                'attr'  => array('placeholder' => 'Votre email')
            ))
            ->add('phone', 'text', array(
                'label' => 'Téléphone :',
                'attr'  => array('placeholder' => 'Téléphone...')
            ))
        ;

        // Remove the username field
        $builder->remove('username');
    }

    public function getName()
    {
        return 'bambou_user_registration';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'cascade_validation' => true,
        ));
    }
}