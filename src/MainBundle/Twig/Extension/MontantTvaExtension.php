<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 06/05/18
 * Time: 16:42
 */

namespace MainBundle\Twig\Extension;

class MontantTvaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('montantTva', array($this, 'calculMontantTva'))
        );
    }

    public function calculMontantTva($prixHT, $tva)
    {
        return round($prixHT * (1+ $tva/100) - $prixHT, 2);
    }

    public function getName()
    {
        return 'montant_tva_extension';
    }
}