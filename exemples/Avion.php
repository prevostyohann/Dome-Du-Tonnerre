<?php
class Avion extends Vehicule {
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

public function deplace() {
    echo"Je vole";
}
public function accelere () {
    echo"Je pousse la manette des gaz à fond";
}

public function freine () {
    echo "J'inverse la poussée";
}

public function bruit () {
    echo "Bruit de réacteur";
}

public function setMarque ( string $marque ) {
    $this->marque = $marque;
}
public function getMarque () {
    return $this->marque;
}

public function setModele ( string $modele ) {
    $this->modele = $modele;
}
public function getModele () {
    return $this->modele;
}

public function setKilometrage ( int $kilometrage ) {
    $this->kilometrage = $kilometrage;
}
public function getKilometrage () {
    return $this->kilometrage;
}

public function setVitesseMax ( int $vitesseMax ) {
    $this->vitesseMax = $vitesseMax;
}
public function getVitesseMax () {
    return $this->vitesseMax;
}

public function setCylindre ( int $cylindre ) {
    $this->cylindre = $cylindre;
}
public function getCylindre () {
    return $this->cylindre;
}



}

