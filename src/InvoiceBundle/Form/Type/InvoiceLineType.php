<?php
namespace AFMP\InvoiceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Form type
 */
class InvoiceLineType extends AbstractType
{
    private $taxes = array('0' => 'Pas de TVA');

    /**
     * Constructor
     * @param EntityManager $entityManager
     */
    public function __construct($entityManager = null)
    {
        if ($entityManager) {
            $taxes = $entityManager->getRepository('AFMPInvoiceBundle:Taxes')->findBy(array(), array('order' => 'ASC'));
            if ($taxes) {
                $preparedTaxes = array();
                foreach ($taxes as $tax) {
                    $preparedTaxes[$tax->getRate()] = $tax->getLibelle();
                }
                $this->taxes = $preparedTaxes;
            }
        }
    }

    /**
     * Build form
     * @param FormBuilderInterface $builder
     * @param array                $options
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'textarea', array(
                'required'   => false,
                'max_length' => 255
            ))
            ->add('amount', 'text', array(
                'required' => false,
                'attr' => array('class' => 'center arial'),
            ))
            ->add('quantity', 'text', array(
                'required' => false,
                'attr' => array('class' => 'center arial'),
            ))
            ->add('tax', 'choice', array(
                'choices' => $this->taxes,
                'attr' => array('class' => 'center arial')
            ));
    }

    /**
     * Get name of fields
     * @return string
     */
    public function getName()
    {
        return 'afmp_invoicebundle_invoicelinetype';
    }
    
    /**
     * Mapping with entity
     * @param OptionResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AFMP\InvoiceBundle\Entity\InvoiceLine'
        ));
    }
}