<?php

class Orc extends Personnages implements Armes, Talents {
    private $enduranceInitiale;
    private $armeChoisie;
    private $talentChoisie;
    
    public function __construct(string $name) {
        parent::__construct($name);
        $this->pv = 100;
        $this->endurance = 900;
        $this->enduranceInitiale = 900;
        $this->force = 80;
        $this->enVie = true;
    }
    
    public function choisirTalent( $talent) {
        $this->talentChoisie = $talent;
    }
    
    public function cavalier() {
         $this->setForce(70);
         $this->endurance = 400;
         $this->enduranceInitiale = 400;
    }
    public function magicien() {
        $this->setForce(90);
        $this->endurance = 1000;
        $this->enduranceInitiale = 1000;
    }
    public function guerrier() {
        $this->setForce(100);
        $this->endurance = 800;
        $this->enduranceInitiale = 800;
    }
    public function assassin() {
        $this->setForce(80);
        $this->endurance = 600;
        $this->enduranceInitiale = 600;
    }

    public function talent() {
        switch ($this->talentChoisie) {
            case 'cavalier':
                return $this->cavalier();
            case 'magicien':
                return $this->magicien();
            case 'guerrier':
                return $this->guerrier();
            case 'assassin':
                return $this->assassin();
            default:
                throw new Exception("talent invalide");
        }
    }

    public function choisirArme(string $arme) {
        $this->armeChoisie = $arme;
    }

    public function attaquer(): int {
        switch ($this->armeChoisie) {
            case 'arc':
                return $this->arc();
            case 'hache':
                return $this->hache();
            case 'epee':
                return $this->epee();
            case 'baton':
                return $this->baton();
            case 'batonMagique':
                return $this->batonMagique();
            case 'dague':
                return $this->dague();
            case 'masse':
                return $this->masse();
            default:
                throw new Exception("Arme invalide");
        }
    }

    private function randomMultiplier(float $min, float $max): float {
        return rand($min * 100, $max * 100) / 100;
    }

    public function arc() {
        return $this->force * $this->randomMultiplier(1.0, 1.2);
    }

    public function hache() {
        return $this->force * $this->randomMultiplier(1.4, 1.6);
    }

    public function epee() {
        return $this->force * $this->randomMultiplier(1.1, 1.3);
    }

    public function baton() {
        return $this->force * $this->randomMultiplier(0.6, 0.8);
    }

    public function batonMagique() {
        return $this->force * $this->randomMultiplier(1.2, 1.4);
    }

    public function dague() {
        return $this->force * $this->randomMultiplier(1.0, 1.1);
    }

    public function masse() {
        return $this->force * $this->randomMultiplier(1.6, 1.8);
    }

    public function getEnduranceInitiale(): int {
        return $this->enduranceInitiale;
    }

    public function reduireEndurance( $degats) {
        $this->endurance -= $degats;
        if ($this->endurance < 0) {
            $this->endurance = 0;
        }
    }

    public function defendre(): int {
        return $this->endurance;
    }

    public function estEnVie(): bool {
        return $this->endurance > 0;
    }

    public function crashTheGameIfLoose() {}

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setPv(int $pv) {
        $this->pv = $pv;
    }

    public function getPv() {
        return $this->pv;
    }

    public function setEndurance(int $endurance) {
        $this->endurance = $endurance;
    }

    public function getEndurance(): int {
        return $this->endurance;
    }

    public function setForce(int $force) {
        $this->force = $force;
    }

    public function getForce(): int {
        return $this->force;
    }

    public function setEnVie(bool $enVie) {
        $this->enVie = $enVie;
    }

    public function getEnVie() {
        return $this->enVie;
    }

    public function getArme(): string {
        return $this->armeChoisie;
    }

    public function getTalent(): string {
        return $this->talentChoisie;
    }
}