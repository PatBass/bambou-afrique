<?php
namespace AFMP\InvoiceBundle\Services;

/**
 * Extends HTML2PDF default class
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class HTML2PDF extends \HTML2PDF
{
    /**
     * Constructor
     *
     * @param string  $orientation
     * @param mixed   $format
     * @param string  $langue
     * @param boolean $unicode
     * @param string  $encoding
     * @param array   $marges
     */
    public function __construct($orientation = 'P', $format = 'A4', $langue='fr', $unicode=true, $encoding='UTF-8', $marges = array(5, 5, 5, 8))
    {
        parent::__construct($orientation, $format, $langue, $unicode, $encoding, $marges);
    }
    /**
     * Add new tag END_LAST_PAGE
     * @param array $param
     */
    protected function _tag_open_END_LAST_PAGE($param)
    {
        $zoneActive = round($this->pdf->getH()) - ($this->_margeTop + $this->_margeBottom);
        $posYzone = $this->pdf->getY() - $this->_margeTop;
        $heightNeeded = (float) $param['style']['height']; 
        if ($posYzone + $heightNeeded > $zoneActive) {
            $this->_setNewPage();
        }
    }  
    
    /**
     * Close new tag action
     * @param array $param
     * @return boolean
     */
    protected function _tag_close_END_LAST_PAGE($param)  
    {  
        return true;
    }
}