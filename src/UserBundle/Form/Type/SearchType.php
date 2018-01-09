<?php
namespace AFMP\ClientBundle\Form\Type;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilderInterface;

/**
 * Formulaire de recherche de client
 *
 * @author Vincent KELLEHER <vincent@squareeyes.com>
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
        $builder
            ->add('query', 'text', array(
                'required' => false,
                'attr' => array(
                    'style' => 'width: 200px; float: left;',
                    'placeholder' => 'Recherche ...'
                )
            ));
    }

    /**
     * Nom du formulaire
     * @return string
     */
    public function getName()
    {
        return 'afmp_clientbundle_searchtype';
    }
}