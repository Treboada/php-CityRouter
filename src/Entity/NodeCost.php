<?php
namespace Treboada\CityRouter\Entity;

interface NodeCost
{

    /**
     *
     * @param NodeCost $another
     * @return bool
     */
    function equals($another);

    /**
     *
     * @param NodeCost $another
     * @return bool
     */
    function greaterThan($another);
}

