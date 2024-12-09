<?php
abstract class Vehicule {
    protected string $marque;
    protected string $modele;
    protected int $kilometrage;
    protected int $vitesseMax;
    protected int $cylindre;
public function __construct($marque, $modele, $kilometrage, $vitesseMax, $cylindre) {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->kilometrage = $kilometrage;
    $this->vitesseMax = $vitesseMax;
    $this->cylindre = $cylindre;
}
public function deplace (){}
public function accelere () {}
public function freine () {}

public function bruit () {}

}