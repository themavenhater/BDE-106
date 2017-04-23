<?php
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
echo "connecta ";
if(isset($_POST['add_event'])) {
    echo "dekhal";
    $name=htmlspecialchars($_POST['nom_ev']);
    $type = htmlspecialchars($_POST['type_ev']);
    $price = htmlspecialchars($_POST['price']);
    $descr = htmlspecialchars($_POST['desc_ev']);
$image="adoula";
$status="process";
    $req = $bdd->prepare("INSERT INTO boutique VALUES (null,?,?,?,? )");
    $req->execute(array($name, $type, $price, $descr));
    echo "execute";
    $lastid = $bdd->lastInsertId();
    echo "djab id";


    if(isset($_FILES['foto_event']) AND !empty($_FILES['foto_event']['name'])) {
        echo "dekhal1";
        if(exif_imagetype($_FILES['foto_event']['tmp_name']) == 2) {
            echo "dekhal2";
            $chemin = 'bout/'.$lastid.'.jpg';
            move_uploaded_file($_FILES['foto_event']['tmp_name'], $chemin);
        } else {
            $message = 'Votre image doit être au format jpg';
        }
    }
}
echo "khrédj";
    //header("Location: event.html");

?>
