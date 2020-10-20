<?php

class Animal
{
    private $name = Animal;

    public function __construct($name)
    {
        $this->name = $name;
        echo "Я $name <br> ";
    }

    public function move()
    {

        echo "$this->name идет <br>";
    }

    public function massa()
    {
        $var = $_GET['massa'];
        echo "Масса -> $this->name = $var кг <br> ";

    }

    public function eat()
    {
        $var = $_GET['eat'];
        echo "$this->name съел $var <br> ";

    }
}

?>