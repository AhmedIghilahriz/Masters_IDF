<?php
require "begin.html";
require_once "Model.php";
$m = Model::getModel();
$nb = $m->getLdf();
?>

<h1>Liste des Masters en Ile de france</h1>

<?php

    echo "<table>";
    echo"<tr><th>Etablissement</th><th>libelle Diplome</th><th>Commune</th></tr>";
    foreach ($nb as $ligne){ 
        echo"<tr>";
        echo"<td>". $ligne['etablissement'] ."</td>";
        echo"<td>". $ligne['libelle_diplome'] ."</td>";
        echo"<td>". $ligne['commune'] ."</td>";
        echo"</tr>";
    
    }
    echo"</table";


    
?>
<?php require "end.html"; ?>


