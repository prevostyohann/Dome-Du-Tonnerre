<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Combat Tour par Tour</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Bulma/css/bulma.min.css">
    <style>
        body {
            background-image: url('./Ressources/areneVS.jpg');
            max-width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .combat-info {
            display: flex;
            justify-content: space-between;
        }
        .combatant {
            width: 45%;
        }
        .combatant img {
            max-width: 40%;
            height: auto;
        }
    </style>
</head>
<body class="has-text-white has-text-centered">
<?php

include "./autoLoader.php";

// Fonction pour créer un personnage basé sur le choix
function creerPersonnage($type, $name) {
    switch ($type) {
        case 'Elfe':
            return new Elfe($name);
        case 'Nain':
            return new Nain($name);
        case 'Humain':
            return new Humain($name);
        case 'Orc':
            return new Orc($name);
        default:
            throw new Exception("Type de personnage invalide");
    }
}

session_start();

$combatTermine = false;
$degatsRecus1 = 0;
$degatsRecus2 = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['personnages'])) {
        $joueur1Type = $_POST['joueur1'];
        $joueur2Type = $_POST['joueur2'];
        $arme1 = $_POST['arme1'];
        $arme2 = $_POST['arme2'];
        $talent1 = $_POST['talent1'];
        $talent2 = $_POST['talent2'];

        $monPersonnage1 = creerPersonnage($joueur1Type, $joueur1Type);
        $monPersonnage2 = creerPersonnage($joueur2Type, $joueur2Type);

        $monPersonnage1->choisirArme($arme1);
        $monPersonnage2->choisirArme($arme2);

        $monPersonnage1->choisirTalent($talent1);
        $monPersonnage2->choisirTalent($talent2);

        $monPersonnage1->talent();
        $monPersonnage2->talent();

        $_SESSION['personnages'] = [$monPersonnage1, $monPersonnage2];
        $_SESSION['tour'] = 1;
    } else {
        $monPersonnage1 = $_SESSION['personnages'][0];
        $monPersonnage2 = $_SESSION['personnages'][1];
        $tour = $_SESSION['tour'];

        echo '<h2 class="is-size-3">Tour ' . $tour . '</h2><br><br>';

        $images = [
            'Elfe' => './Ressources/Elfe.png',
            'Nain' => './Ressources/Nain.png',
            'Humain' => './Ressources/Humain.png',
            'Orc' => './Ressources/Orc.png'
        ];

        if ($tour % 2 !== 0) {
            // Tour du Joueur 1
            $degats1 = $monPersonnage1->attaquer();
            $monPersonnage2->reduireEndurance($degats1);
            $degatsRecus2 = $degats1;
            $degatsRecus1 = 0;
        } else {
            // Tour du Joueur 2
            $degats2 = $monPersonnage2->attaquer();
            $monPersonnage1->reduireEndurance($degats2);
            $degatsRecus1 = $degats2;
            $degatsRecus2 = 0;
        }

        echo '<div class="combat-info">';
        echo '<div class="combatant">';
       
        echo '<h3 class="is-size-3">' . $monPersonnage1->getName() . '</h3>';
        echo '<h4 class="is-size-5">Force : ' . $monPersonnage1->getForce() . '</h4>';
        echo '<h4 class="is-size-5">Endurance : ' . $monPersonnage1->getEndurance() . '/' . $monPersonnage1->getEnduranceInitiale() . '</h4>';
        echo '<h4 class="is-size-5">Arme : ' . $monPersonnage1->getArme() . '</h4>';
        echo '<h4 class="is-size-5">Talent : ' . $monPersonnage1->getTalent() . '</h4>';
        echo '<h4 class="is-size-5">Dégâts reçus : ' . $degatsRecus1 . '</h4>';
        echo '<img src="' . $images[$monPersonnage1->getName()] . '" alt="' . $monPersonnage1->getName() . '"><br>';
        echo '</div>';
        echo '<div class="combatant">';
        
        echo '<h3 class="is-size-3">' . $monPersonnage2->getName() . '</h3>';
        echo '<h4 class="is-size-5">Force : ' . $monPersonnage2->getForce() . '</h4>';
        echo '<h4 class="is-size-5">Endurance : ' . $monPersonnage2->getEndurance() . '/' . $monPersonnage2->getEnduranceInitiale() . '</h4>';
        echo '<h4 class="is-size-5">Arme : ' . $monPersonnage2->getArme() . '</h4>';
        echo '<h4 class="is-size-5">Talent : ' . $monPersonnage2->getTalent() . '</h4>';
        echo '<h4 class="is-size-5">Dégâts reçus : ' . $degatsRecus2 . '</h4>';
        echo '<img src="' . $images[$monPersonnage2->getName()] . '" alt="' . $monPersonnage2->getName() . '"><br>';
        echo '</div>';
        echo '</div><br><br>';

        if (!$monPersonnage2->estEnVie()) {
            echo '<h2 class="is-size-3">' .  $monPersonnage2->getName() . ' est vaincu! BOOUUUUUHHHH Gros Nulos xD' . '<br><br>';
            $combatTermine = true;
            session_destroy();
        } elseif (!$monPersonnage1->estEnVie()) {
            echo '<h2 class="is-size-3">' .  $monPersonnage1->getName() . ' est vaincu! BOOUUUUUHHHH Gros Nulos xD' . '<br><br>';
            $combatTermine = true;
            session_destroy();
        }

        if (!$combatTermine) {
            $_SESSION['tour']++;
        }
    }
}
?>
<?php if (!$combatTermine): ?>
<form method="post">
    <input class="is-size-5" type="submit" value="Prochain tour">
</form>
<?php endif; ?>
<?php if ($combatTermine): ?>
    <form action="index.php" method="get">
        <input class="is-size-5" type="submit" value="Retour à l'accueil">
    </form>
<?php endif; ?>

</body>
</html>