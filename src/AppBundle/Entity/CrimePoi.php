<?php
namespace AppBundle\Entity;

class CrimePoi
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
     * @return CrimePoi
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
     * @return CrimePoi
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
     * @return CrimePoi
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
     * @param integer $idloc
     *
     * @return CrimePoi
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
