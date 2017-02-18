<?php
namespace AppBundle\Entity;

class FirePoi
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
     * Set idloc
     *
     * @param integer $idloc
     *
     * @return FirePoi
     */
    public function setIdloc($idloc)
    {
        $this->idloc = $idloc;

        return $this;
    }

    /**
     * Get idloc
     *
     * @return integer
     */
    public function getIdloc()
    {
        return $this->idloc;
    }
}
