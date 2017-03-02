<?php
namespace AppBundle\Entity;

use Symfony\Component\Intl\DateFormatter\DateFormat\MonthTransformer;

class FirePoi
{
    private $id;

    private $long;

    private $lat;

    private $date;

    private $loc;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set long
     *
     * @param float $long
     *
     * @return FirePoi
     */
    public function setLong($long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * Get long
     *
     * @return float
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return FirePoi
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return FirePoi
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set loc
     *
     * @param string $loc
     *
     * @return FirePoi
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }


    /**
     * Get month
     *
     * @return string
     */
    public function getMonth()
    {
        $test = $this->date;
        $outro=explode('-',$test);
        return $outro[1];
    }
}
