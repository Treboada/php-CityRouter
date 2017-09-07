<?php
namespace Treboada\CityRouter\Entity;

class Route
{

    /**
     *
     * @var NodeConnection[]
     */
    private $connections;

    public function __construct()
    {
        $this->connections = [];
    }

    /**
     * Getter.
     *
     * @return NodeConnection[]
     */
    public function &getConnections()
    {
        return $this->connections;
    }
}

