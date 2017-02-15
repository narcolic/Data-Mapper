<?php

namespace AppBundle\Entity;

class Location
{
    private $idloc;
    private $name;

    /**
     * Get idloc
     *
     * @return integer
     */
    public function getIdloc()
    {
        return $this->idloc;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Location
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
