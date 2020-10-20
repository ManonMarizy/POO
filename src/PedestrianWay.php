<?php
include_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane =1;
    /**
     * @var int
     */
    protected $maxSpeed = 10;
    /**
     * @param Vehicle $vehicle
     */
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard )
            array_push($currentVehicule, $vehicle);
    }
}