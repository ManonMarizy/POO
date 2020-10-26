<?php
include_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane =2;
    /**
     * @var int
     */
    protected $maxSpeed = 50;
    /**
     * @param Vehicle $vehicle
     */
    public function addVehicle(Vehicle $vehicle)
    {
        array_push($this->currentVehicule, $vehicle);
    }
}
