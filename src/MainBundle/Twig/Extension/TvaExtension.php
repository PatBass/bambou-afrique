<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 06/05/18
 * Time: 16:42
 */

namespace MainBundle\Twig\Extension;

class TvaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('tva', array($this, 'calculTva'))
        );
    }

    public function calculTva($prixHT, $tva)
    {
        return round($prixHT * (1+ $tva/100), 2);
    }

    public function getName()
    {
        return 'tva_extension';
    }
}