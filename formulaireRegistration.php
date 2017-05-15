<?php

try{
	$pdo = new PDO('sqlite:' . dirname(__FILE__) . '/hotel.db3');
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
} catch(Exception $e) {
	echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
	die();
}

// $arrivee = $_GET["arrivee"];
// $depart = $_GET["depart"];
// $type = $_GET["type"];

$requete = $pdo->prepare("SELECT price FROM tarif WHERE type_of_room=? AND (date=? OR date=?)");
// $requete2 = $pdo->prepare("SELECT price FROM tarif WHERE date=:aze AND type_of_room=:qsd")
$prix = 0;
// "-".join($arrivee.split('/').inverse())
// while (dateInferieur($arrivee, $depart)) {
//   $requete->execute([$arrivee, $type]);
//   $prix += $requete->fetchAll();
//   $arrivee = ajouter($arrivee, 8);
// }
// $requete2->execute(aze=$arrivee, qsd=$type);
?>


 <!doctype html>
 <html lang="fr">
     <head>
 		<meta charset="utf-8">
 		<title> REGISRESERVATION </title>
 		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

     <script src="js/jquery.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.easing.min.js"></script>
     <script src="js/jquery.scrollTo.js"></script>
     <script src="js/wow.min.js"></script>


 	</head>
 <body>
   <div class="container">

       <div class="page-header">
           <img class="img-responsive" src="photo/logo.png" width= "300">
       </div>

       <div class="row">
           <div class="col-lg-6">
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <h3 class="text-center">Rappel de votre choix </h3>
                     Votre arrivée:
                     Votre Départ:
                     Type de chambre:
                     <?php
                     echo $prix;
                     ?>
                 </div>
               </div>
           </div>



           <div class="col-lg-6">
             <div class="panel panel-default">
             <div class="panel-heading">
               <h3 class="text-center">Finissez-vous la réservation: </h3>
             </div>

             <div class="panel-body">
               <div class="row">
                 <div class="col-md-10">
                   <form>
                     <div class="form-group row">
                       <div class="col-md-4">
                         <label for="name">Nom</label>
                       </div>
                       <div class="col-md-8">
                         <input type="text" id="name" class="form-control" placeholder="Tapez votre nom">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4">
                         <label for="lastName">Prénom</label>
                       </div>
                       <div class="col-md-8">
                         <input type="text" id="lastName" class="form-control" placeholder="Tapez votre prénom">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4">
                         <label for="email">E-mail</label>
                       </div>
                       <div class="col-md-8">
                         <input type="text" id="email" class="form-control" placeholder="tapez votre email">
                       </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-4">
                         <label for="phone">Téléphone</label>
                       </div>
                       <div class="col-md-8">
                         <input type="text" id="phone" class="form-control" placeholder="tapez votre numero de téléphone">
                       </div>
                     </div>
                     </div>


               <center><div class="col-md-12"><button type="submit" class="btn btn-primary">Envoyer</button></div></center>
       </div>



 </div>


   </body>
 </html>
