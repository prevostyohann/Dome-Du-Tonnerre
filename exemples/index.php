<?php

include "./autoLoader.php";

$maVoiture = new Voiture (marque: 'BMW',modele: 'M3',kilometrage: '1',vitesseMax: '300', cylindre: '4');
$monAvion = new Avion ( marque: "Airbus", modele: "A380", kilometrage: "250", vitesseMax: "800", cylindre: "2" );
$maMoto = new Moto ( marque: "Yamaha", modele: "YZ250", kilometrage: "2", vitesseMax: "140", cylindre: "1" );

echo"Avion";
echo '<br><br>';
echo"Marque : ";
echo $monAvion ->getMarque();
echo '<br><br>';
echo"Modèle : ";
echo $monAvion ->getModele();
echo '<br><br>';
echo"Heures de Vol : ";
echo $monAvion ->getKilometrage();
echo '<br><br>';
echo"Vitesse Max : ";
echo $monAvion ->getVitesseMax();
echo '<br><br>';
echo"Nombre de Réacteur : ";
echo $monAvion ->getCylindre();
echo '<br><br>';
echo"Déplacement : ";
echo $monAvion ->deplace();
echo '<br><br>';
echo"Acceleration : ";
echo $monAvion ->accelere();
echo '<br><br>';
echo"Freinage : ";
echo $monAvion ->freine();
echo '<br><br>';
echo"Bruit : ";
echo $monAvion ->bruit();

echo '<br><br><br><br>';

echo"Voiture";
echo '<br><br>';
echo"Marque : ";
echo $maVoiture ->getMarque();
echo '<br><br>';
echo"Modèle : ";
echo $maVoiture ->getModele();
echo '<br><br>';
echo"Kilomètrage : ";
echo $maVoiture ->getKilometrage();
echo '<br><br>';
echo"Vitesse Max : ";
echo $maVoiture ->getVitesseMax();
echo '<br><br>';
echo"Nombre de Cylindre : ";
echo $maVoiture ->getCylindre();
echo '<br><br>';
echo"Déplacement : ";
echo $maVoiture ->deplace();
echo '<br><br>';
echo"Acceleration : ";
echo $maVoiture ->accelere();
echo '<br><br>';
echo"Freinage : ";
echo $maVoiture ->freine();
echo '<br><br>';
echo"Bruit : ";
echo $maVoiture ->bruit();

echo '<br><br><br><br>';

echo"Moto";
echo '<br><br>';
echo"Marque : ";
echo $maMoto ->getMarque();
echo '<br><br>';
echo"Modèle : ";
echo $maMoto ->getModele();
echo '<br><br>';
echo"Kilomètrage : ";
echo $maMoto ->getKilometrage();
echo '<br><br>';
echo"Vitesse Max : ";
echo $maMoto ->getVitesseMax();
echo '<br><br>';
echo"Nombre de Cylindre : ";
echo $maMoto ->getCylindre();
echo '<br><br>';
echo"Déplacement : ";
echo $maMoto ->deplace();
echo '<br><br>';
echo"Acceleration : ";
echo $maMoto ->accelere();
echo '<br><br>';
echo"Freinage : ";
echo $maMoto ->freine();
echo '<br><br>';
echo"Bruit : ";
echo $maMoto ->bruit();