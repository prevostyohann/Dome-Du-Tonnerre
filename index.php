<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choix du Personnage et de l'Arme</title>
    <link rel="stylesheet" href="./Bulma/css/bulma.min.css">
</head>
<body>
    <h1 class="has-text-centered is-size-3 has-text-white">Choisissez vos Personnages et leurs Armes</h1><br><br>
    <div class="columns has-text-centered has-text-white is-size-5">
        <div class="column">
            <form class="" action="combat.php" method="post">
                <label for="joueur1">Race du Joueur 1 :</label>
                <select name="joueur1" id="joueur1">
                    <option value="Elfe">Elfe</option>
                    <option value="Nain">Nain</option>
                    <option value="Humain">Humain</option>
                    <option value="Orc">Orc</option>
                </select>
                <br><br>
                <label for="arme1">Arme du Joueur 1 :</label>
                <select name="arme1" id="arme1">
                    <option value="arc">Arc</option>
                    <option value="hache">Hache</option>
                    <option value="epee">Épée</option>
                    <option value="baton">Bâton</option>
                    <option value="batonMagique">Bâton Magique</option>
                    <option value="dague">Dague</option>
                    <option value="masse">Masse</option>
                </select>
                <br><br>
                <label for="talent1">Talent du Joueur 1 :</label>
                <select name="talent1" id="talent1">
                    <option value="cavalier">Cavalier</option>
                    <option value="magicien">Magicien</option>
                    <option value="guerrier">Guerrier</option>
                    <option value="assassin">Assassin</option>
                </select>
            </div>
            <br><br><br><br>
            <div class="column">
                <label for="joueur2">Race du Joueur 2 :</label>
                <select name="joueur2" id="joueur2">
                    <option value="Elfe">Elfe</option>
                    <option value="Nain">Nain</option>
                    <option value="Humain">Humain</option>
                    <option value="Orc">Orc</option>
                </select>
                <br><br>
                <label for="arme2">Arme du Joueur 2 :</label>
                <select name="arme2" id="arme2">
                    <option value="arc">Arc</option>
                    <option value="hache">Hache</option>
                    <option value="epee">Épée</option>
                    <option value="baton">Bâton</option>
                    <option value="batonMagique">Bâton Magique</option>
                    <option value="dague">Dague</option>
                    <option value="masse">Masse</option>
                </select>
                <br><br>
                <label for="talent2">Talent du Joueur 2 :</label>
                <select name="talent2" id="talent2">
                    <option value="cavalier">Cavalier</option>
                    <option value="magicien">Magicien</option>
                    <option value="guerrier">Guerrier</option>
                    <option value="assassin">Assassin</option>
                </select>
            </div>
        </div>
        <br><br><br><br>
        <div class="has-text-centered">
            <input class="button is-primary is-size-5" type="submit" value="Commencer le combat">
        </div>
    </form>

    
</body>
</html>