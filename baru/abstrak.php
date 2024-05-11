<?php

abstract class alatElektronik{
    abstract public function lihat_spec();
}

class laptop extends alatElektronik{
    public function lihat_spec()
    {
        return "lihat spec laptop";
    }

    public function beli_laptop(){
        return "Beli laptop . . .";
    }
}

class handphone extends alatElektronik{
    public function lihat_spec()
    {
        return "lihat spec HP";
    }
}

$laptop_baru = new laptop();
echo $laptop_baru->lihat_spec();
echo"<br>";
echo $laptop_baru->beli_laptop();
echo"<br>";