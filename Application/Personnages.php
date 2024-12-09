<?php
abstract class Personnages {
    protected string $name;
    protected int $pv;
    protected int $endurance;
    protected int $force;
    protected bool $enVie;
    protected string $arme;
    protected string $talent;

    public function __construct($name) {
        $this->name = $name;
        $this->enVie = true;
    }

    public function attaquer(): int {
        return $this->force;
    }

    public function defendre(): int {
        return $this->endurance;
    }

    public function choisirArme(string $arme) {
        $this->arme = $arme;
    }

    public function choisirTalent($talent) {
        $this->talent = $talent;
    }

    public function getArme(): string {
        return $this->arme;
    }

    public function getTalent(): string {
        return $this->talent;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getForce(): int {
        return $this->force;
    }

    public function getEndurance(): int {
        return $this->endurance;
    }

    public function getEnduranceInitiale(): int {
        return $this->pv;
    }

    public function reduireEndurance($degats) {
        $this->endurance -= $degats;
        if ($this->endurance <= 0) {
            $this->enVie = false;
        }
    }

    public function estEnVie(): bool {
        return $this->enVie;
    }

    public function deceder() {}
    public function crashTheGameIfLoose() {}
}