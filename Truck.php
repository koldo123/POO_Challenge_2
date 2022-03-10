<?php
require_once 'Vehicle.php';

class Truck extends Vehicle 
{

    public const ALLOWED_ENERGIES = [
        'oil',
        'gazole'
    ];

    private int $storage;
    private int $cargo = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, int $storage, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorage($storage);
        $this->setEnergy($energy);
    }

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage($storage): void
    {
        $this->storage = $storage;
    }

    public function getCargo(): string
    {
        if($this->cargo == $this->storage) {
            return 'full';
        } else {
            return 'in filling';
        }
    }

    public function setCargo($cargo): void
    {
        $this->cargo = $cargo;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): Truck
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}
