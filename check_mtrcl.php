<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 4/21/2017
 * Time: 9:14 PM
 */
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');

$req = $bdd->prepare("select email from exars WHERE matri=".$_GET['matri'].";");
$req2 = $bdd->prepare("select id_user from users WHERE email=".$_GET['email'].";");
$req->execute();
$result = $req->fetch();
$result2 = $req2->fetch();

if ($result == $_GET['email'] && $result2 =='')
{
    echo "très bien";
}
else {
    echo "a bien";
}

?>