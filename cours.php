<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
    <?php include("header.html"); ?>

        <main>
            <h1>Nos cours</h1>
            <div class="produits" style="display: flex; align-content: center; width: 50vh;">
                <img src="img/zumba.jpg" width="auto" height="250vh">
                <span>
                    zumba
                </span>
            </div>
            <div class="produits" style="display: flex; align-content: center; width: 50vh;">
                <img src="img/crossfit.jpg" width="250vh" height="auto">
                <span>
                    crossfit
                </span>
            </div>
            <div class="produits" style="display: flex; align-content: center; width: 50vh;">
                <img src="img/yoga.jpg" width="250vh" height="auto">
                <span>
                    yoga
                </span>
            </div>
            <div class="produits" style="display: flex; align-content: center; width: 50vh;">
                <img src="img/pilates.jpg" width="250vh" height="auto">
                <span>
                    pilates
                </span>
            </div>
        </main>

        <?php include("footer.html"); ?>
    </div>
</body>

</html>