<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=lionfit;charset=utf8', 'root', '');
}

catch(Exception $e) {
    die('erreur :'.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO user(nom, prenom, age, genre, abonnement) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['genre'], $_POST['abonnement']));

    echo "Bonjour".$_POST["prenom"];
?>