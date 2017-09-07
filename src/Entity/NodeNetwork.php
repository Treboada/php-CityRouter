<?php
namespace Treboada\CityRouter\Entity;

class NodeNetwork
{

    /**
     *
     * @var NodeConnection[]
     */
    protected $connections;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->connections = [];
    }

    /**
     *
     * @return NodeConnection[]
     */
    public function &getConnections()
    {
        return $this->connections;
    }
}

