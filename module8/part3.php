<?php
class abba
{
    public $sompod = 50000;
    public $ma = 5001;
    public $vai = 2000;
    public function motsompod()
    {
        $mot = $this->sompod + $this->ma + $this->vai;
        echo "mot sompad = " . $mot;
    }
}

class saoyal extends abba
{
    public $sompod = 2000;
}

$som = new saoyal();
$som->motsompod();
