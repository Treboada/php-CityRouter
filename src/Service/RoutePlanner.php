<?php
namespace Treboada\CityRouter\Service;

use Treboada\CityRouter\Entity\Location;
use Treboada\CityRouter\Entity\Route;

interface RoutePlanner
{

    /**
     * Let the planner choose.
     *
     * @var integer
     */
    const CRITERIA_NONE = 0;

    /**
     * The fastest plan between 2 points.
     *
     * @var integer
     */
    const CRITERIA_FASTEST = 1;

    /**
     * The cheapest plan between 2 points.
     *
     * @var integer
     */
    const CRITERIA_CHEAPEST = 2;

    /**
     * Plans a route from 2 locations.
     *
     * @param Location $location_a
     *            Source location.
     * @param Location $location_b
     *            Destination location.
     * @param int $criteria
     *            Criteria to sort routes.
     * @return Route The selected route according to the selected criteria.
     */
    function planRoute(Location $location_a, Location $location_b, int $criteria = self::CRITERIA_NONE);
}

