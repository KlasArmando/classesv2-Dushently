<?php

class auto{
    public $merk;
    public $model;
    public $uitvoering;
    public $carrosserie;
    public $bouwjaar;
    public $kilometerstand;
    public $brandstof;
    public $transmissie;
    public $deuren;
    public $kleur;
    public $kenteken;
}

class klant{
    public $klantnaam;
    public $klantadres;
    public $email;
    public $telefoonnummer;
    public $postcode;
    public $plaats;
    public $klantnummer;
}


$auto1 = new auto();
$auto1 ->merk = 'volkswagen';
$auto1 ->model = 'golf';
$auto1 ->uitvoering = 'gti';
$auto1 ->carrosserie = 'hatchback';
$auto1 ->bouwjaar = '2019';
$auto1 ->kilometerstand = 20200;
$auto1 ->brandstof = 'diesel';
$auto1 ->transmissie = 'automaat';
$auto1 ->deuren = '5';
$auto1 ->kleur = 'zwart';
$auto1 ->kenteken = '25-BVE-4';

var_dump($auto1);

$klant1 = new klant();
$klant1 ->klantnaam = 'piet jansen';
$klant1 ->klantadres = 'alexanderlaan 2';
$klant1 ->email = 'piet@gmail.com';
$klant1 ->telefoonnummer = '0640002242';
$klant1 ->postcode = '3077HB';
$klant1 ->plaats = 'rotterdam';
$klant1 ->klantnummer = 001;


var_dump($klant1);
