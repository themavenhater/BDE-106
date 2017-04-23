<?php
if (!isset($_SESSION['id']))
{
    header("location:index.php");
}
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bdd2;charset=utf8", "root", "");
$event= $_GET['id'];
$id_user = $_SESSION['id'];
$signin = $bdd->prepare('insert into sign_ev_list VALUES (NULL ,?,?) ');
$signin->execute(array($event,$id_user));

//header("location: event.php");

?>