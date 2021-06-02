<!DOCTYPE html>

<html>

<head>
    <title>Formulaire abonnement de base</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
    <?php include("header.html"); ?>
        <main>
            <form class="produits" action="target.php" method="post">

                <label for="nom">Nom</label> : <br /><input type="text" name="nom" /><br /><br />

                <label for="prenom">Prenom</label> : <br /><input type="text" name="prenom" /><br /><br />

                <label for="age">Age</label> : <br /><input type="text" name="age" /><br /><br />

                <p> Genre : </p>

                <div>
                    <input type="radio" name="genre" value=1 checked>
                    <label for="genre">Femme</label>
                </div>

                <div>
                    <input type="radio" name="genre" value=2>
                    <label for="genre">Homme</label>
                </div>
                <!-- <div>
                    <input type="radio" name="genre" value=2>
                    <label for="genre">Autres</label>
                </div>-->
                <p> Abonnement : </p>

                <div>
                    <input type="radio" name="abonnement" value=1>
                    <label for="abonnement">Abonnement de base : 25€</label>
                </div>

                <div>
                    <input type="radio" name="abonnement" value=2 checked>
                    <label for="genre">Abonnement + : 35€</label>
                </div>

                <input type="submit" value="Envoyer" /><br />

                <input type="reset" value="Annuler" /><br />
            </form>
        </main>
        <?php include("footer.html"); ?>
    </div>
</body>

</html>