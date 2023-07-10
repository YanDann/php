<?php 

namespace App;

class Car {

    private int $wheels = 4;
    private string $color;
    private string $modele;
    private int $gas = 50;
    private int $conso;

    public function __construct(string $color, string $modele, int $conso)
    {
        $this->color = $color;
        $this->modele = $modele;
        $this->conso = $conso;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getWheels()
    {
        return $this->wheels;
    }

    public function rouler(int $km){
        $this->gas -= $km*$this->conso;
        return 'Votre '. $this->modele .' a roulée '. $km . 'km , vous avez consommé '.$km*$this->conso. 'L d\'essence.';
    }

    public function klaxxon(): string{
        return $this->modele . ' fais HONK HOOONK !!';
    }

    public function fillFuel(int $fuel){
        $this->gas += $fuel;

        return 'Vous avez remis '. $fuel .'L d\'essence, bonne route !' . ' N\'oubliez pas qu\'il vous reste '.$this->gas.' L d\'essence.';
    }
}

?>
