<?php
require_once "baza.php";

//echo $veza->getAttribute(PDO::ATTR_SERVER_INFO);

// query nećemo koristiti
$izraz = $veza->query("show tables;");
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

echo "<ol>";
foreach($rezultati as $red){
    echo "<li>" .$red->Tables_in_pausalni_obrt, "</li>";
}
echo "</ol>";
