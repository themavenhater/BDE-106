<?php 
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
echo "connecta ";

if(isset($_POST['add_user'])) {
    echo "dekhal";
    $name=htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mtrcl = htmlspecialchars($_POST['nbr']);

    $req = $bdd->prepare("INSERT INTO users VALUES (null,?,?,?,?,?)");
    $req->execute(array($name, $prenom, $email, $mtrcl, $mdp));
    echo "executa";
    $lastid = $bdd->lastInsertId();
    echo "djab id";


    if(isset($_FILES['foto_event']) AND !empty($_FILES['foto_event']['name'])) {
        echo "dekhal1";
        if(exif_imagetype($_FILES['foto_event']['tmp_name']) == 2) {
            echo "dekhal2";
            $chemin = 'img_event/'.$lastid.'.jpg';
            move_uploaded_file($_FILES['foto_event']['tmp_name'], $chemin);
        } else {
            $message = 'Votre image doit être au format jpg';
        }
    }
}
echo "khrédj";
    //header("Location: event.html");

?>