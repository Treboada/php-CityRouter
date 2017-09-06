<?php
namespace Treboada\CityRouter\Entity;

class ServicePath implements \ArrayAccess
{

    /**
     *
     * @var int
     */
    protected $id;

    /**
     *
     * @var int[]
     */
    protected $nodes;

    /**
     * Contructor.
     *
     * @param array $initialData
     */
    public function __construct(array $initialData = array())
    {
        $this->nodes = $initialData;
    }

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
     * {@inheritdoc}
     * @see \\ArrayAccess::offsetExists()
     */
    public function offsetExists($offset)
    {
        return isset($this->nodes[$offset]);
    }

    /**
     *
     * {@inheritdoc}
     * @see \\ArrayAccess::offsetGet()
     */
    public function offsetGet($offset)
    {
        return $this->nodes[$offset];
    }

    /**
     *
     * {@inheritdoc}
     * @see \\ArrayAccess::offsetSet()
     */
    public function offsetSet($offset, $value)
    {
        $this->nodes[$offset] = $value;
    }

    /**
     *
     * {@inheritdoc}
     * @see \\ArrayAccess::offsetUnset()
     */
    public function offsetUnset($offset)
    {
        unset($this->nodes[$offset]);
    }

    /**
     *
     * @return int[]
     */
    public function getArrayCopy()
    {
        return $this->nodes;
    }
}

