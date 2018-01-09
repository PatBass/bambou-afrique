<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Form builder
 *
 * @author Patrick BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class AddressType extends AbstractType
{
    /**
     * Build form
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('streetnumber', 'text', array(
                    'label' => 'Numéro',
                    'required' => false,
                    'attr' => array('placeholder' => 'N° ...')
                ))
                ->add('streetextension', 'choice', array(
                    'choices' => array(
                        '' => '-',
                        'bis' => 'bis',
                        'ter' => 'ter'
                    ),
                    'required' => false,
                    'multiple' => false,
                    'expanded' => false,
                    'preferred_choices' => array(''),
                    'empty_value' => '-'
                ))
                ->add('streettype', 'choice', array(
                    'choices' => array(
                        'rue'       => 'rue',
                        'route'     => 'route',
                        'avenue'    => 'avenue',
                        'boulevard' => 'boulevard',
                        'place'     => 'place',
                    ),
                    'multiple' => false,
                    'expanded' => false
                ))
                ->add('streetname', 'text', array(
                    'label' => 'Nom de la voie',
                    'required' => false,
                    'attr' => array('placeholder' => 'Rue ...')
                ))
                ->add('zipcode', 'text', array(
                    'label' => 'Code Postal',
                    'required' => false,
                    'attr' => array('placeholder' => 'Code postal ...', 'class' => 'zipcode_format')
                ))
                ->add('city', 'text', array(
                    'label' => 'Ville',
                    'required' => false,
                    'attr' => array('placeholder' => 'Ville ...')
                ))
                ->add('country', 'text', array(
                    'label' => 'Pays',
                    'required' => false,
                    'attr' => array('placeholder' => 'Pays ...')
                ));
    }
    
    /**
     * Mapping with entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Address'
        ));
    }

    /**
     * Get name for fields
     * @return string
     */
    public function getName()
    {
        return 'bambou_userbundle_address';
    }
}
