<?php
namespace UserBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;
 
/**
 * Add custom filters
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class TwigExtension extends \Twig_Extension
{
    private $calendar;

    /**
     * Constructor
     * @param Calendar $calendar
     */
    public function __construct($calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * Get name of extensions
     * @return string
     */
    public function getName() 
    {
        return 'bamboutwigext';
    }
 
    /**
     * Declare filters
     * @return array
     */
    public function getFilters() 
    {
        return array(
            'txt_month'    => new \Twig_Filter_Method($this, 'twigTextMonth'),
            'txt_day'      => new \Twig_Filter_Method($this, 'twigTextDay'),
            'get_schedule' => new \Twig_Filter_Method($this, 'twigGetSchedule'),
            'phone_number' => new \Twig_Filter_Method($this, 'twigPhoneNumber'),
            'pdfcase'      => new \Twig_Filter_Method($this, 'twigPDFCase'),
            'substr'       => new \Twig_Filter_Method($this, 'twigSubstr')
        );
    }

    /**
     * Write text in case
     * @param string $txt
     * @param float  $top
     * @param float  $left
     * @param float  $size
     * @return string
     */
    public function twigPDFCase($txt, $top, $left, $size)
    {
        $txt = utf8_decode($txt);
        $return = "";
        for ($key = 0; $key < strlen($txt); $key++) {
            $tmpLeft = $left + ($key * $size);
            $return .= "<div style=\"position: absolute; top: ". $top ."mm; left: ". $tmpLeft ."mm; width: ". $size ."mm;\"><p style=\"text-align: center;\">". utf8_encode($txt[$key]) ."</p></div>";
        }

        return $return;
    }

    /**
     * Expose substr
     * @param string $txt
     * @param int    $start
     * @param int    $end
     * @return string
     */
    public function twigSubstr($txt, $start, $end)
    {
        return substr($txt, $start, $end);
    }

    /**
     * Get schedule
     * @param Int $unit
     * @return string
     */
    public function twigGetSchedule($unit)
    {
        return $this->calendar->getSchedule($unit);
    }

    /**
     * Convert date to text month
     * @param string $date
     * @return string
     */
    public function twigTextMonth($date)
    {
        if (is_string($date)) {
            $date = new \DateTime($date);
        }

        return $this->calendar->getTextMonth($date);
    }

    /**
     * Convert date to text day
     * @param string $date
     * @return string
     */
    public function twigTextDay($date)
    {
        if (is_string($date)) {
            $date = new \DateTime($date);
        }

        return $this->calendar->getTextDay($date);
    }

    /**
     * Make Phone Numbers human friendly
     * @param string $phoneNumber
     * @return string
     */
    public function twigPhoneNumber($phoneNumber, $separator = '.')
    {
        $friendlyPhoneNumber = '';
        for ($number = 0; $number < strlen($phoneNumber) - 3; $number += 2) {
            $friendlyPhoneNumber .= $phoneNumber[$number].$phoneNumber[$number + 1].$separator;
        }

        $friendlyPhoneNumber .= $phoneNumber[$number].$phoneNumber[$number + 1];

        return $friendlyPhoneNumber;
    }
}