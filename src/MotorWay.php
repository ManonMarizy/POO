<?php
include_once 'HighWay.php';

final class MotorWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 4;
    /**
     * @var int
     */
    protected $maxSpeed = 130;
    /**
     * @param Vehicle $vehicle
     */
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Cars)
            array_push($this->currentVehicule, $vehicle);
    }
}
