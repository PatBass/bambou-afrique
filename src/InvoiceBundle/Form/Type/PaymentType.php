<?php
namespace AFMP\InvoiceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Form type
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class PaymentType extends AbstractType
{
    /**
     * Build form
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('paymentdate', 'datepicker')
            ->add('amount', 'text', array(
                'required' => true,
                'attr' => array('class' => 'center arial', 'placeholder' => 'Montant ...')
            ))
            ->add('identifier', 'text', array(
                'required' => true,
                'attr' => array('placeholder' => 'Référence ...')
            ))
            ->add('type', 'choice', array(
                'choices' => array(
                    'cash' => 'Espèce',
                    'check' => 'Chèque',
                    'creditcard' => 'Carte bleue',
                    'bankwire' => 'Virement'
                ),
                'mapped' => false,
                'data' => 'check',
                'multiple' => false,
                'expanded' => true
            ));
    }

    /**
     * Get name of fields
     * @return string
     */
    public function getName()
    {
        return 'afmp_invoicebundle_paymenttype';
    }
    
    /**
     * Mapping with entity
     * @param OptionResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AFMP\InvoiceBundle\Entity\Payment'
        ));
    }
}