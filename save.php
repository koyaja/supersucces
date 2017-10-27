<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 27/10/2017
 * Time: 09:43
 */
include 'database.php';
$pdo = Database::connect();
if (!empty($_POST)) {
  //  echo '   ****************************  '.$_POST['age'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $profesion = $_POST['profession'];
//    var_dump($profesion);
    $sexe = $_POST['sexe'];
    $pays = $_POST['pays'];
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req =  $pdo->prepare('INSERT INTO supersucces (id, nom, prenom , sexe, age, profession, pays) VALUES(?, ?, ?, ?, ?, ?, ?)') or die(print_r($bdd->errorInfo()));
    $req->execute(array(null, $nom, $prenom, $sexe, $age, $profesion , $pays));
    //var_dump($req);
    if($req){
        echo '<div class="col-lg-6 customDiv" >    <h2 sytyle="text-align: center"> Enregistrement effectué avec succès </h2>';
        echo '<a class="bg-success customButton" href="index.html"> Retour a l\'accueil </a></div>';
    }


}