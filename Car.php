<?php

class Car {

    private $_hasParkBrake; 

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->_hasParkBrake = $hasParkBrake;

    }
    public function getParkBrake(bool $hasParkBrake)
    {
        return $this->_hasParkBrake;
    }

    public function start(bool $hasParkBrake)
    {
        if ($hasParkBrake === true) {
            // affiche erreur et arrête exécution du script 
            throw new Exception("T'as oublié le frein à main, mec !");

        }
    return 1 / $nombre;
    }
}