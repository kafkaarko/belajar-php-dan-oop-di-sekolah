<?php

class makanan{
    public $makan;
    
    public function __construct($isi)
    {
        $this->makan = $isi;
    }

    public function getMakan(){
        return $this-> makan;
    }

}

$pisang = new makanan("pisang");
 echo $pisang -> getMakan();