<?php
namespace AppBundle\Entity;

class CrimePoiMap
{
    private $id;

    private $long;

    private $lat;

    private $date;

    private $idloc;


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
     * @return CrimePoiMap
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
     * @return CrimePoiMap
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
     * @param \DateTime $date
     *
     * @return CrimePoiMap
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idloc
     *
     * @param string $idloc
     *
     * @return CrimePoiMap
     */
    public function setIdloc($idloc)
    {
        $this->idloc = $idloc;

        return $this;
    }

    /**
     * Get idloc
     *
     * @return string
     */
    public function getIdloc()
    {
        return $this->idloc;
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
