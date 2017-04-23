<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 4/23/2017
 * Time: 2:27 AM
 */
$idev= $_GET['id'];
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
$event = $bdd->prepare('INSERT INTO event_valide SELECT event.*, CURRENT_DATE() FROM event
  WHERE id =?;');
$event->execute(array($idev));
$delevent = $bdd->prepare('DELETE FROM event WHERE id = ?');
$delevent->execute(array($idev));
header("location: li_vote.php");

?>