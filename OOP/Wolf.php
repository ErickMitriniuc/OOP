<?php

class An
{
    private $names = An;

    public function __construct($names)
    {
        $this->names = $names;
        echo "Я $names <br> ";
    }

    public function movee()
    {

        echo "$this->names идет <br>";
    }

    public function massaa()
    {
        $var = $_GET['massaa'];
        echo "Масса -> $this->names = $var кг <br> ";
    }
    public function eatt()
    {
        $var = $_GET['eatt'];
        echo "$this->names съел $var <br> ";

    }
}


?>