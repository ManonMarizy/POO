<?php
require_once 'Vehicle.php';

class Cars extends Vehicle
{
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    /**
     * @var bool
     */
    private $hasParkBrake = false;
    /**
     * Cars constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    /**
     * @return mixed|void
     */
    public function changeWheel()
    {
    }
    /**
     * @return string
     */
    public function start()
    {
        $this->currentSpeed = 0;
        if ($this->hasParkBrake)
            throw new Exception("you can't move, park brake is on");
        return "Start";
    }
    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }
    /**
     * @param string $energy
     */
    public function setEnergy(string $energy)
    {
        $this->energy = $energy;
    }
    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
    /**
     * @param bool $hasParkBrake
     */
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

}
