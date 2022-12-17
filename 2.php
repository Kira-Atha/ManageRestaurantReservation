<?php
    session_start();
    $nom_cli_temp=$_POST["nom_cli"];
    $prenom_cli_temp=$_POST["prenom_cli"];
    $num_tel_cli_temp=$_POST["num_tel_cli"];
    $nom_cli=$_SESSION["nom_cli"];
    $prenom_cli=$_SESSION["prenom_cli"];
    $num_tel_cli=$_SESSION["num_tel_cli"];

    if(!is_numeric($num_tel_cli_temp[count($num_tel_cli)])){
        $error=1;
        header("Location: 3.php");
    }else{
        $error=0;
        array_push($nom_cli,$nom_cli_temp);
        array_push($prenom_cli,$prenom_cli_temp);
        array_push($num_tel_cli,$num_tel_cli_temp);
        header("Location: index.php");
    }
    // Vérification checkbox; supprimer valeur ( manque tps )
    $_SESSION["nom_cli"]=$nom_cli;
    $_SESSION["prenom_cli"]=$prenom_cli;
    $_SESSION["num_tel_cli"]=$num_tel_cli;
    $_SESSION["error"]=$error;
?>