<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
    <?php include("header.html"); ?>

        <main style="display: flex; justify-content: center; flex-flow: row wrap">
            <div style="display: flex; align-items: center; justify-content: center; margin-block: 100px; color:white;">
                <a style="display: block;" href="Formulairedebase.html">
                <article style="margin-right: 5%;">
                    <img src="img/abo.jpg">
                    <p>Abonnement de base <span>25€/mois</span></p>

                </article>
            </a>
                <a style="display: block;" href="Formulairebienetre.html">
                <article style="margin-left: 5%;">
                    <img src="img/abo.jpg">
                    <p>Abonnement avec espace bien être <span>35€/mois</span></p>

                </article>
                </a>
            </div>

        </main>

        <?php include("footer.html"); ?>

    </div>
</body>

</html>