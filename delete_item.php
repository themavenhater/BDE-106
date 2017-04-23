<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 4/22/2017
 * Time: 8:09 PM
 */
$id_delete = $_GET['id'];
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
$delete = $bdd->prepare('delete from boutique WHERE id_item=?');
$delete->execute(array($id_delete));
header("location: admin_boutique.php");