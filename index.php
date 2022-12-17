<?php
    // NOTE : Le stress ne fait pas bon ménage avec le temps
    session_start();
    // Pas de gestion de la durée de vie de la session : fictif
    // Gestion du  premier lancement -> Vérification existence session, créée ( 0 session = 0 enregistrement )
    if(!isset($_SESSION["nom_cli"])){
        $nom_cli=array();
        $prenom_cli=array();
        $num_tel_cli =array();
        $pas_de_client=1;
    }else{
        $nom_cli=$_SESSION["nom_cli"];
        $prenom_cli=$_SESSION["prenom_cli"];
        $num_tel_cli=$_SESSION["num_tel_cli"];
        $pas_de_client=$_SESSION["pas_de_client"];
        if($nom_cli==""){//Gestion de l'affichage ' pas de client ' si appuyé sur précédent après avoir introduit lettres dans $num_cli
            $pas_de_client=1;
        }else{
            $pas_de_client=0;
        }
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
            <p>Consultation des réservations</p>
            <table>
            <tr>
                <th>N° réservation</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Numéro de téléphone</th>
                <th>Statut</th>
             </tr>
            <?php
            //Stop jusqu'au nombre total d'éléments dans le tableau ( l'arrêt aurait être n'importe quel élément count($tab1)=count($tab2)... Aurait aussi pu être géré en tableau multidimensionnel...
                for($i=0;$i<count($nom_cli);$i++){
                    $tempi=$i+1;
                    echo '<tr>';
                            echo '<td>'.$tempi.'</td>';
                            echo '<td>'.$nom_cli[$i].'</td>';
                            echo '<td>'.$prenom_cli[$i].'</td>';
                            echo '<td>'.$num_tel_cli[$i].'</td>';
                            echo '<td>Est arrivé<input type="checkbox" name="reservation".$i></td>';
                        echo '</tr>';
                }
                if($pas_de_client==1) {
                    echo '<tr><td>Il n\'y a aucune réservation actuellement</tr></td>';
                }
            ?>
            </table><br><br>
            <a href="3.php"><input type="button" class="button" value="Ajouter nouvelle réservation"></a>
        </div>
        <?php footer($nom,$prenom,$classe);?>
    </body>
</html><?php
    $_SESSION["nom_cli"]=$nom_cli;
    $_SESSION["prenom_cli"]=$prenom_cli;
    $_SESSION["num_tel_cli"]=$num_tel_cli;
    $_SESSION["pas_de_client"]=$pas_de_client;
?>