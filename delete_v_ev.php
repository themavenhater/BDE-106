<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 4/23/2017
 * Time: 2:27 AM
 */
$idev= $_GET['id'];
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
$event = $bdd->prepare('INSERT INTO past_event SELECT event_valide.*, CURRENT_DATE() FROM event_valide
  WHERE id_ev_v =?;');
$event->execute(array($idev));
$delevent = $bdd->prepare('DELETE FROM event_valide WHERE id_ev_v = ?');
$delevent->execute(array($idev));
header("location: li_inscri.php");

?>