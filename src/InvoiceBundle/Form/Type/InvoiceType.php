<?php
namespace AFMP\InvoiceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use AFMP\InvoiceBundle\Form\Type\InvoiceLineType;
use AFMP\ClientBundle\Form\Type\AddressType;

/**
 * Form for edit invoice
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class InvoiceType extends AbstractType
{
    private $entityManager;

    /**
     * Constructor
     * @param EntityManager $entityManager
     */
    public function __construct($entityManager = null)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Build form
     * @param FormBuilderInterface $builder
     * @param array                $options
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', array(
                    'required'   => false,
                    'max_length' => 255,
                    'attr'       => array(
                        'placeholder' => 'Objet ...'
                    )
                ))
                ->add('invoicedate', 'datepicker', array(
                    'attr' => array(
                        'style' => 'width: 100% !important;'
                    )
                ))
                ->add('client', 'entity', array(
                    'class'    => 'AFMPClientBundle:UserInfo',
                    'property' => 'name',
                    'required' => false,
                    'attr'     => array('class' => 'chosen', 'data-placeholder' => 'Client ...'),
                    'query_builder' => function(EntityRepository $entityRepository) {
                        return $entityRepository->createQueryBuilder('clt')
                                                ->orderBy('clt.lastname', 'ASC');
                    }
                ))
                ->add('lines', 'collection', array(
                    'type' => new InvoiceLineType($this->entityManager)
                ));
    }

    /**
     * Get name of fields
     * @return string
     */
    public function getName()
    {
        return 'afmp_invoicebundle_invoicetype';
    }
    
    /**
     * Mapping with entity
     * @param OptionResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AFMP\InvoiceBundle\Entity\Invoice'
        ));
    }
}