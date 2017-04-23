<?php
session_start();
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bdd2;charset=utf8", "root", "");
if(isset($_GET['t'],$_GET['id']) AND !empty($_GET['t']) AND !empty($_GET['id'])) {
   $getid = (int) $_GET['id'];
   $gett = (int) $_GET['t'];
    $sessionid="";
   if ($sessionid == "")
   {
       $sessionid = $_SESSION['id'];
   }
   $check = $bdd->prepare('SELECT id FROM event WHERE id = ?');
   $check->execute(array($getid));
   if($check->rowCount() == 1) {
      if($gett == 1) {
         $check_like = $bdd->prepare('SELECT id FROM likes WHERE id_article = ? AND id_membre = ?');
         $check_like->execute(array($getid,$sessionid));
         if($check_like->rowCount() == 1) {
            $del = $bdd->prepare('DELETE FROM likes WHERE id_article = ? AND id_membre = ?');
            $del->execute(array($getid,$sessionid));
         } else {
            $ins = $bdd->prepare('INSERT INTO likes (id_article, id_membre) VALUES (?, ?)');
            $ins->execute(array($getid, $sessionid));
         }
      }
       header('Location: activity.php?id='.$getid);

   } else {
      exit('Erreur fatale. <a href="boutique.php">Revenir à l\'accueil</a>');
   }
} else {
   exit('Erreur fatale. <a href="boutique.php">Revenir à l\'accueil</a>');
}
