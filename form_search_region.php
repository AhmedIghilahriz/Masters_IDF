<?php
require "begin.html";
//include "connexion.php";
require_once "Model.php";
$m = Model::getModel();
$regions = $m->getRegion();

?>
<h1> Recherche de Master par région </h1>
<form action="view_list_model.php" method="get">
    <label for="choix_region">Choisissez une région :</label>
    <select name="choix_region" id="choix_region">
        <?php foreach ($regions as $region) { 
          echo "<option value='{$region['id_region']}'>{$region['region']}</option>";

        } ?>
    </select>
    <br><br>
    <input type="submit" value="Rechercher">
</form>


<?php require "end.html"; ?>