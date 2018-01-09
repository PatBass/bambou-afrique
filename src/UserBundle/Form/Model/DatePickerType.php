<?php
namespace UserBundle\Form\Model;
use Symfony\Component\Form\FormInterface,
    Symfony\Component\Form\FormView,
    Symfony\Component\Form\AbstractType,
    Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Datepicker Field
 *
 * @author Patrick BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class DatePickerType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults(array(
            'widget' => 'single_text',
            'input'  => 'datetime',
            'format' => 'dd/MM/yyyy'
        ));
    }

    public function buildView(FormView $view, FormInterface $form, array $options){
        return;
    }

    public function getName() {
        return 'datepicker';
    }
    
    public function getParent() {
        return 'date';
    }
}