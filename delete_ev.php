<?php
$id_delete = $_GET['id'];
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
$delete = $bdd->prepare('delete from event WHERE id=?');
$delete->execute(array($id_delete));
header("location: li_vote.php");
?>