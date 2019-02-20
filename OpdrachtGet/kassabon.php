<?php
class Kassabon
{
    public $Datum;
    public $Wasmachine;
    public $Droger;
    public $Koelkast;
    public $Exprijs;
    public $Incprijs;
    public $btw;

    public function __construct($Datum, $Wasmachine, $Droger, $Koelkast)
    {
        $this->Datum = $Datum;
        $this->Wasmachine= $Wasmachine;
        $this->Droger= $Droger;
        $this->Koelkast= $Koelkast;
    }

    public function getDatum()
    {
        return $this->Datum;
    }

    public function getDroger()
    {
        return $this->Droger;
    }

    public function getKoelkast()
    {
        return $this->Koelkast;
    }

    public function getWasmachine()
    {
        return $this->Wasmachine;
    }

    public function setBtw($btw){
        $this->btw = $btw;
    }

    public function getBtw(){
        return $this->btw;
    }

    public function setExprijs($Exprijs)
    {
        $this->Exprijs = $Exprijs;
    }

    public function getExprijs(){
        return $this->Exprijs;
    }

    public function setIncprijs($Incprijs)
    {
        $this->Incprijs = $Incprijs*$this->btw;
    }

    public function getIncprijs(){
        return $this->Incprijs;
    }
}


$kassabon = new Kassabon(date("Y-m-d h:i:s"), $_POST["wasmachine"],
    $_POST["droger"],$_POST["koelkast"]);

$kassabon->setExprijs($kassabon->getKoelkast() + $kassabon->getDroger() + $kassabon->getWasmachine());
$kassabon->setBtw(1.21);

$kassabon->setIncprijs($kassabon->getExprijs());
var_dump($kassabon->getExprijs());
var_dump($kassabon->getIncprijs());
