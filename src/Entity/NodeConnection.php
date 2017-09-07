<?php
namespace Treboada\CityRouter\Entity;

class NodeConnection
{

    /**
     *
     * @var string
     */
    private $nodeA;

    /**
     *
     * @var string
     */
    private $nodeB;

    /**
     *
     * @var NodeCost
     */
    private $cost;

    /**
     * Constructor.
     *
     * @param string $node_a
     *            ID for node source.
     * @param string $node_b
     *            ID for node destination.
     */
    public function __construct(string $node_a, string $node_b)
    {
        $this->nodeA = $node_a;
        $this->nodeB = $node_b;
    }

    /**
     *
     * @return NodeCost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     *
     * @param NodeCost $cost
     * @return self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * ID for node source.
     *
     * @return string
     */
    public function getNodeA()
    {
        return $this->nodeA;
    }

    /**
     * ID for node destination.
     *
     * @return string
     */
    public function getNodeB()
    {
        return $this->nodeB;
    }
}

