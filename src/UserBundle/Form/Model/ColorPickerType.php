<?php
namespace AFMP\UserBundle\Form\Model;
use Symfony\Component\Form\FormInterface,
    Symfony\Component\Form\FormView,
    Symfony\Component\Form\AbstractType,
    Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Color Picker Field
 *
 * @author Patrick BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class ColorPickerType extends AbstractType
{
    /**
     * Set default options
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => array('class' => 'colorpicker'),
            'choices' => array(
                "#d40000" => "#d40000",
                "#522126" => "#522126",
                "#00ac81" => "#00ac81",
                "#09614b" => "#09614b",
                "#6c6c6c" => "#6c6c6c",
                "#3b063a" => "#3b063a",
                "#6a2515" => "#6a2515",
                "#170863" => "#170863",
                "#484070" => "#484070",
                "#d28f00" => "#d28f00",
                "#452f00" => "#452f00",
                "#624026" => "#624026",
                "#ff4800" => "#ff4800",
                "#687c61" => "#687c61",
                "#9e6a5e" => "#9e6a5e",
                "#09a9a7" => "#09a9a7",
                "#194948" => "#194948",
                "#554f4a" => "#554f4a",
                "#524a55" => "#524a55",
                "#a19ea3" => "#a19ea3",
                "#2a1134" => "#2a1134",
                "#908259" => "#908259",
                "#b786e5" => "#b786e5",
                "#a19b7d" => "#a19b7d",
                "#7d8ba1" => "#7d8ba1",
                "#7da198" => "#7da198"
            )
        ));
    }

    /**
     * Build View
     * @param FormView      $view
     * @param FormInterface $form
     * @param array         $options
     * @return void
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        return;
    }

    /**
     * Set name
     * @return string
     */
    public function getName()
    {
        return 'colorpicker';
    }
    
    /**
     * Get parent
     * @return string
     */
    public function getParent()
    {
        return 'choice';
    }
}