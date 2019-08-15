<?php
require_once "baza.php";

//echo $veza->getAttribute(PDO::ATTR_SERVER_INFO);

// query nećemo koristiti
$izraz = $veza->query("select * from smjer;");
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
//var_dump($rezultati);
echo "</pre>";

//jedno ispod drugog ispisati nazive smjerova
foreach($rezultati as $red){
    echo $red->naziv, "<br />";
}

//zbrojite sve cijene smjerova i ispišite zbroj
$zbroj=0;
foreach($rezultati as $red){
    $zbroj+=$red->cijena;
}
echo $zbroj, "<br />";

//ispišite prosječnu cijenu smjera
echo $zbroj / count($rezultati);