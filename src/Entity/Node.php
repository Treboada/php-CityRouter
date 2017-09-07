<?php
namespace Treboada\CityRouter\Entity;

class Node
{

    /**
     *
     * @var int
     */
    protected $id;

    /**
     *
     * @var Location
     */
    protected $location;

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter.
     *
     * @param int $id
     * @return \Treboada\CityRouter\Entity\Node
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Getter.
     *
     * @return \Treboada\CityRouter\Entity\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Setter.
     *
     * @param \Treboada\CityRouter\Entity\Location $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
}

