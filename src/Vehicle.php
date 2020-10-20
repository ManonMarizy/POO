<?php
abstract class Vehicle
{
    /**
     * @var string
     */
    protected $color;
    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    protected $nbSeats;
    /**
     * @var integer
     */
    private $nbWheels;
    /**
     * Vehicle constructor.
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }
    /**
     * @return mixed
     */
    abstract public function changeWheel();
    /**
     * @return string
     */
    public function start()
    {
        $this->currentSpeed = 0;
        return "Start";
    }
    /**
     * @return string
     */
    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    /**
     * @return string
     */
    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    /**
     * @return int
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0)
            $this->currentSpeed = $currentSpeed;
    }
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    /**
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }
    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
}
