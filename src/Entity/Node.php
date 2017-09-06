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
     * @var float
     */
    protected $latitude;

    /**
     *
     * @var float
     */
    protected $longitude;

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param int $id
     * @return Treboada\\CityRouter\\Entity\\Node
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     *
     * @param float $latitude
     * @return Treboada\\CityRouter\\Entity\\Node
     */
    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     *
     * @param float $longitude
     * @return Treboada\\CityRouter\\Entity\\Node
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
}

