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
<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=lionfit;charset=utf8', 'root', '');
}

catch(Exception $e) {
    die('erreur :'.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO users(nom, prenom, age, genre, abonnement) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['genre'], $_POST['abonnement']));

    echo "<span class=homepagetext style=background-color:#ffffff00;>Bonjour ".$_POST["prenom"]."</span>";
    echo "<span class=homepagetext style=background-color:#ffffff00;><br>Votre abonnement et vos données ont bien été enregistré, vous pouvez vous rendre à notre salle de sport dès maintenant.</span>";
    
?>
</main>
<?php include("footer.html"); ?>
    </div>
</body>

</html>
 <!--


if (strlen("nom") >= 3){
    echo "Votre abonnement et vos données ont bien été enregistré, vous pouvez vous rendre à notre salle de sport dès maintenant.";
    $req = $bdd->prepare('INSERT INTO users(nom, prenom, age, genre, abonnement) VALUES(?, ?, ?, ?, ?)');
    $req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['genre'], $_POST['abonnement']));
    echo "<br> Vous allez à présent être redirigé sur la page principale";
    sleep(60);
    header('Location: homepage.html');


} 
else 
    echo "Bonjour ".$_POST["prenom"];
 -->

