<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 4/22/2017
 * Time: 4:08 PM
 */
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
$users = $bdd->query('SELECT * FROM boutique ORDER BY id_item ASC ');
$row_user = array();
?>
<!DOCTYPE html>
<html lang="fr" >
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>3-YZ Evènement</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/animation.css"/>
    <link rel="stylesheet" href="css/style3.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body id="body">


<div id="header_fixed" class="fadeIn animation_delay"> <!--animation menu + menu fixe -->
    <nav class="top-bar" data-topbar role="navigation"> <!-- menu fixe -->
        <ul class="title-area">



            <li class="name">
                <h1><a id="logo" href="#"><img src="img/logo.png" width="140"></a></h1> <!-- logo à gauche du menu (il faudrait mettre un vrai logo) -->
            </li>
            <li class="active">
                Bonjour Cesi
            </li>
            <li class="active"><a href="disconnect.php">deconnexion</a></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section" data-options="sticky_on">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="active"><a href="li_exars.php">liste des exars</a></li>
                <li class="active"><a href="li_propose.php">Liste des propositions</a></li>
                <li class="active"><a href="add_event.php">ajouter évènement</a></li>
                <li class="active"><a href="admin_boutique.php">boutique</a></li>
            </ul>
        </section>
    </nav>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <br><br><br><br><br>
    <h2>Liste des articles</h2>

    <table class="table table-bordered" style="table-layout: fixed; word-wrap: break-word">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>prix</th>
            <th>Description</th>
            <th>matricule</th>
        </tr>
        </thead>
        <tbody>
        <?php while($a = $users->fetch()) { ?>
            <tr>
                <td><?= $a['nom'] ?></td>
                <td><?= $a['type'] ?></td>
                <td><?= $a['prix'] ?></td>
                <td><?= $a['descr'] ?></td>
                <td><?= $a['reference'] ?></td>
                <td><a href="delete_item.php?id=<?= $a['id_item'] ?>">supprimer article</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <button style="font-size: 30px;"> <a href="ajoutpr.php" >Ajouter article</a> </button>


</body>
</html>
