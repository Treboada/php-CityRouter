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
     * @var \DateTime
     */
    private $timestampA;

    /**
     *
     * @var \DateTime
     */
    private $timestampB;

    /**
     *
     * @var ConnectionCost
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
     * Getter.
     *
     * @return ConnectionCost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Setter.
     *
     * @param ConnectionCost $cost
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

    /**
     * Getter.
     *
     * @return \DateTime
     */
    public function getTimestampA()
    {
        return $this->timestampA;
    }

    /**
     * Setter.
     *
     * @param \DateTime $timestampA
     * @return self
     */
    public function setTimestampA($timestampA)
    {
        $this->timestampA = $timestampA;
        return $this;
    }

    /**
     * Getter.
     *
     * @return \DateTime
     */
    public function getTimestampB()
    {
        return $this->timestampB;
    }

    /**
     * Setter.
     *
     * @param \DateTime $timestampB
     * @return self
     */
    public function setTimestampB($timestampB)
    {
        $this->timestampB = $timestampB;
        return $this;
    }

    /**
     * Returns if connection is possible at a moment.
     *
     * @param \DateTime $timestamp
     *            The moment to test.
     * @return boolean
     */
    public function isWithinWindow(\DateTime $timestamp)
    {
        $tsNode = $this->timestampA->getTimestamp();
        $tsParam = $timestamp->getTimestamp();

        return ($tsNode - $tsParam >= 0);
    }
}

