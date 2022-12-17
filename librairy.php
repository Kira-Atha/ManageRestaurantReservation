<?php
    $nom="Huygebaert";
    $prenom="Amandine";
    $classe="1ère année bachelier informatique de gestion";

    function footer($nom,$prenom,$classe){
            echo '<div class="footer">Avertissement !<br>';
                echo 'Les éléments de ce site sont purement fictifs. N\'importe quelle corrélation avec la réalité est une pure coïncidence.<br>';
                echo $nom.' '.$prenom.' | '.$classe.'<br>';
                echo 'HEPH Condorcet [WEB] Janvier 2020';
            echo '</div>';
    }
?>