<?php
namespace Treboada\CityRouter\Entity;

interface ConnectionCost
{

    /**
     *
     * @param ConnectionCost $another
     * @return bool
     */
    function equals($another);

    /**
     *
     * @param ConnectionCost $another
     * @return bool
     */
    function greaterThan($another);
}

