<?php
session_start();
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bdd2;charset=utf8", "root", "");
if(isset($_GET['id']) AND !empty($_GET['id'])) {

    $get_id = htmlspecialchars($_GET['id']);
    $article = $bdd->prepare('SELECT * FROM event WHERE id = ?');
    $article->execute(array($get_id));
    if($article->rowCount() == 1) {
        $article = $article->fetch();
        $id = $article['id'];
        $titre = $article['nom'];
        $contenu = $article['type'];
        $location = $article['location'];
        $date = $article['date'];
        $prix = $article['prix'];
        $descr = $article['Descr'];
        $likes = $bdd->prepare('SELECT id FROM likes WHERE id_article = ?');
        $likes->execute(array($id));
        $likes = $likes->rowCount();

    } else {
        die('Cet article n\'existe pas !');
    }



} else {
    die('Erreur');
}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>




<div class="row">
    <div class="large-8 medium-8 columns">
            <div class="large-12 columns">
                <img src="img_event/<?= $id ?>.jpg" width="400" >
            </div>
        <hr />
    </div>

    <div class="large-4 medium-4 columns">
        <h4><?= $titre ?></h4>
        <h5>Location : <?= $location ?></h5>
        <h6>Date : <?= $date ?></h6>
        <h7>Prix : <?= $prix ?></h7><br>
        <p><?= $descr ?></p><br>
        <h5>A vous de jouer:</h5>
        <p><a href="action.php?t=1&id=<?= $id ?>" class="button">(<?= $likes ?>) Voter</a>
            <br><br><br><br><br>
</div>




<script src="js/vendor/jquery.js"></script>

</body>
</html>
