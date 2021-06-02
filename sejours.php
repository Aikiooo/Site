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
            <h1>Nos séjours collectifs</h1>
            <div style="display: flex; align-items: center; justify-content: center; margin-block: 100px; color:white;">
            <div class="produits" style="display: flex; align-content: center; width: 50vh;">
                <img src="img/randonnée.jpg" width="auto" height="100vh">
                <span>
                    Sortie randonnée
                </span>
            </div>
            <div>
                <div class="produits" style="display: flex; align-content: center; width: 50vh;">
                    <img src="img/yoga_balade.jpg" width="auto" height="100vh">
                    <span>
                        balade yoga
                    </span>
                </div>
                <div class="produits" style="display: flex; align-content: center; width: 50vh;">
                    <img src="img/course.jpg" width="auto" height="100vh">
                    <span>
                        course à pied
                    </span></div>
                </div>
        </main>
        <?php include("footer.html"); ?>
    </div>
</body>

</html>