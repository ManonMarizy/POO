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
     *
     */
    public function changeWheel()
    {
    }
}
