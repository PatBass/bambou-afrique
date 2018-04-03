<?php
namespace AFMP\InvoiceBundle\Form\Type;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilderInterface;

/**
 * Formulaire de recherche de facture
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class SearchType extends AbstractType
{
    /**
     * Construction du formulaire
     * @param FormBuilderInterfaces $builder
     * @param array                 $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $dstart = new \DateTime();
        $dstart->sub(new \DateInterval('P1M'));
        $dend = new \DateTime();

        $builder
            ->add('query', 'text', array(
                'required' => false,
                'attr' => array(
                    'style' => 'width: 200px; float: left;',
                    'placeholder' => 'Recherche ...'
                )
            ))
            ->add('payment', 'choice', array(
                'choices' => array(
                    0 => 'Toutes',
                    1 => 'Non payées',
                    2 => 'Payées'
                ),
                'multiple'          => false,
                'expanded'          => true,
                'data'              => 0,
                'preferred_choices' => array(0)
            ));
    }

    /**
     * Nom du formulaire
     * @return string
     */
    public function getName()
    {
        return 'afmp_invoicebundle_searchtype';
    }
}