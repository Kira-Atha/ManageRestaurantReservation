<?php
    session_start();
    $nom_cli=$_SESSION["nom_cli"];
    $prenom_cli=$_SESSION["prenom_cli"];
    $num_tel_cli=$_SESSION["num_tel_cli"];

    if(!isset($_SESSION["error"])){
        $error=0;
    }else{
        $error=$_SESSION["error"];
    }
    include("librairy.php");
?><!doctype html>
<html lang="FR">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta char set="UTF-8">
        <title> Sushi's Mansion </title>
    </head>
    <body>
    <div class="header">
        <p>Sushi's Mansion</p>
    </div>
    <div class="content">
        <p>Ajout d'une réservation</p>
        <p>Veuillez remplir les champs suivants : </p>
        <form action="2.php" method="post">
            <p>Nom : <input type="text" name="nom_cli" required></p>
            <p>Prénom : <input type="text" name="prenom_cli" required></p>
            <p>Numéro de téléphone : <input type="text" name="num_tel_cli" required></p>
            <?php
                if($error==1) {
                    echo '<p class="error">Le numéro de téléphone ne peut pas contenir de lettres...</p>';
                }
            ?>
            <input class="button" type="submit" value="Envoyer">
        </form>
    </div>
    <?php footer($nom,$prenom,$classe);?>
    </body>
</html>
<?php
    $_SESSION["nom_cli"]=$nom_cli;
    $_SESSION["prenom_cli"]=$prenom_cli;
    $_SESSION["num_tel_cli"]=$num_tel_cli;
?>