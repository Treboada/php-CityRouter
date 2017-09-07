<?php
namespace Treboada\CityRouter\Entity;

class Location
{

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
     * Getter.
     *
     * @return number
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Setter.
     *
     * @param number $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Getter.
     *
     * @return number
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Setter.
     *
     * @param number $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
}

