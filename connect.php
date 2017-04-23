<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');

echo "connecta ";

if(isset($_POST['login']) ) {

    echo "dekhal";
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['password']);

    $req = $bdd->prepare("select id_user,prenom from users WHERE email='$email' AND password='$mdp' ;");
    $req->execute();
    $row = $req->fetchAll();
    echo "executa";
    echo "djab id";

    foreach( $row as $result)
    {
        echo "<br> ".$result['id_user'];
        echo "<br> ".$result['prenom'];
    }
    if ($row==null){
        header("location: index.php");
    }

    else {
        $_SESSION["id"] = $result['id_user'];
        echo  "<br> ".$_SESSION["id"];
        $_SESSION["prenom"]= $result['prenom'];
        echo  "<br> ".$_SESSION["prenom"];
        if ($_SESSION["id"]==99){
            header("Location: admin.php");
        }
        else {
            header("Location: event.php");
        }
    }


}
?>