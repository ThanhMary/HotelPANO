<?php

// try{
// 	$pdo = new PDO('sqlite:' . dirname(__FILE__) . '/hotel.db3');
// 	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
// } catch(Exception $e) {
// 	echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
// 	die();
// }
//
// $arrivee = $_GET["arrivee"];
// // $depart = $_GET["depart"];
// $type = $_GET["type"];
//
// $requete = $pdo->prepare("SELECT price FROM tarif WHERE type_of_room=? AND date=?");
// // $requete2 = $pdo->prepare("SELECT price FROM tarif WHERE date=:aze AND type_of_room=:qsd")
// $prix = 0;
// // "-".join($arrivee.split('/').inverse())
// // while (dateInferieur($arrivee, $depart)) {
// $requete->execute([$arrivee, $type]);
// $prix = $requete->fetchAll();
// $prix = $prix[0]["price"];
echo 40;
 ?>
