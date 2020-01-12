<?php

/**
 * Author : Elka
*/

abstract class AbstractShip
{

    protected $model = 'Motor';
    protected $engine = 'Motor';
    protected $capacity = 80;
    protected $topSpeed = 100;

    public function getModel()
    {
        return 'Perahu '.$this->model;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getCapacity()
    {
        return $this->capacity. ' Orang';
    }

    public function getTopSpeed()
    {
        return $this->topSpeed. ' Kmph';
    }
}

class Motor extends AbstractShip
{
}

class Layar extends AbstractShip
{
    protected $model = 'Layar';
    protected $engine = 'Layar Kain';
    protected $capacity = 20;
    protected $topSpeed = 60;
}

class Pesiar extends AbstractShip
{
    protected $model = 'Pesiar';
    protected $capacity = 2000;
    protected $topSpeed = 400;
}

function perahuku(AbstractShip $ship)
{
    echo '---------------<br/>';
    echo 'Nama Model : ' .$ship->getModel();
    echo '<br/>';
    echo 'Mesin : ' .$ship->getEngine();
    echo '<br/>';
    echo 'Kapasitas : ' .$ship->getCapacity();
    echo '<br/>';
    echo 'Kecepatan Maksimal : ' .$ship->getTopSpeed();
    echo '<br/>';
}

$motor = new Motor();
perahuku($motor);
$layar = new Layar();
perahuku($layar);
$pesiar = new Pesiar();
perahuku($pesiar);
?>
