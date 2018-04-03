<?php
namespace MainBundle\Services;

/**
 * Calendar manager
 *
 * @author Patricj BASSOUKISSA <patrickbassoukissa@gmail.com>
 */
class Calendar
{
    private $arrDay = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
    private $arrMonth = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    /**
     * Get monday
     * Covered by MacabreTurkey©
     * @param \DateTime $date
     * @return \DateTime
     */
    public function getMonday(\DateTime $date = null)
    {
        if (!$date) {
            $date = new \DateTime();
        }
        if ($date->format('N') != 1) {
            $date = new \DateTime(date('Y-m-d', strtotime('last monday', $date->getTimestamp())));
        }

        return $date;
    }

    /**
     * Get previous monday
     * Covered by MacabreTurkey©
     * @param \DateTime $date
     * @return \DateTime
     */
    public function getPreviousMonday(\DateTime $date)
    {
        if ($date->format('N') != 1) {
            $date = $this->getMonday($date);
        }
        $date = new \DateTime(date('Y-m-d', strtotime('last monday', $date->getTimestamp())));

        return $date;
    }

    /**
     * Get next monday
     * Covered by MacabreTurkey©
     * @param \DateTime $date
     * @return \DateTime
     */
    public function getNextMonday(\DateTime $date = null)
    {
        if (!$date) {
            $date = new \DateTime();
        }
        $date = new \DateTime(date('Y-m-d', strtotime('next monday', $date->getTimestamp())));

        return $date;
    }

    /**
     * Get week in array
     * Covered by MacabreTurkey©
     * @param \DateTime $date
     * @return array
     */
    public function getWeek(\DateTime $date = null)
    {
        $return = array();
        $monday = $this->getMonday($date);
        $return[] = $monday->format('Y-m-d');
        for ($count = 1; $count < 7; $count++) { 
            $interval = new \DateInterval('P'.$count.'D');
            $date = new \DateTime($monday->format('Y-m-d'));
            $return[] = $date->add($interval)->format('Y-m-d');
        }

        return $return;
    }

    /**
     * Get text month by date
     * Covered by MacabreTurkey©
     * @param \DateTime $date
     * @return string
     */
    public function getTextMonth(\DateTime $date = null)
    {
        if (!$date) {
            $date = new \DateTime();
        }

        return $this->arrMonth[$date->format('n') - 1];
    }

    /**
     * Get text day by date
     * Covered by MacabreTurkey©
     * @param \DateTime $date
     * @return string
     */
    public function getTextDay(\DateTime $date = null)
    {
        if (!$date) {
            $date = new \DateTime();
        }

        return $this->arrDay[$date->format('N') - 1];       
    }

    /**
     * Get schedule by unit
     * Covered by MacabreTurkey©
     * @param int $unit
     * @return string
     */
    public function getSchedule($unit = null)
    {
        if ($unit === null || $unit > 5) {
            return false;
        }

        $addSchedule = floor($unit / 2);
        $startSchedule = $unit * 2 + 7 + $addSchedule;

        // if ($unit == 6) {
        //     $startSchedule = 21;
        // }

        return $startSchedule;
    }
}