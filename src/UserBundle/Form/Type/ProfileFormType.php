<?php

namespace AFMP\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraint\UserPassword as OldUserPassword;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use UserBundle\Form\Type\AddressType;


class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

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

    public function getName()
    {
        return 'bambou_user_profile';
    }
}
