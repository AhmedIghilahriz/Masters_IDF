<?php
require "begin.html";
require_once "Model.php";
?>

<h1>Liste des Masters en Ile de france</h1>
<?php 
    if (isset($_GET['choix_region'])) {
        $region = $_GET['choix_region'];
        $l = Model::getModel();
        $masters = $l->getMasterRegion($region);
        echo "<table>";
        echo "<tr><th>Etablissement</th><th>libelle Diplome</th><th>Commune</th></tr>";
        foreach ($masters as $master) {
            echo "<tr>";
            echo"<td>".$master['etablissement']."</td>";
            echo "<td>".$master['libelle_diplome']."</td>";
            echo"<td>".$master['commune']."</td>";
            echo"</tr>";
        }
        echo "</table>";
    }
    ?>


    <?php require "end.html"; ?>