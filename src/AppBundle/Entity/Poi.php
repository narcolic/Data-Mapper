<?php
namespace AppBundle\Entity;

class Poi
{
    private $id;

    private $long;

    private $lat;

    private $date;

    private $idloc;

    /**
     * Poi constructor.
     * @param $long
     * @param $lat
     */
    public function __construct($long, $lat)
    {
        $this->setLat($lat);
        $this->setLong($long);
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getIdloc()
    {
        return $this->idloc;
    }

    /**
     * @param mixed $idloc
     */
    public function setIdloc($idloc)
    {
        $this->idloc = $idloc;
    }


}
