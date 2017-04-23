<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=bdd2', 'root', '');
if($bdd){
}
    if(isset($_POST['valider']))
    echo "1";
    {
        $types = htmlspecialchars($_POST['types']) ;
        $description = htmlspecialchars($_POST['description']) ;
        $id =$_SESSION["id"];
        echo $id;
        echo "2";
        $requser = $bdd->prepare("INSERT INTO proposition VALUES (null,?,?,?,? )");
        $requser->execute(array($types, $description, date("Y-m-d h:i:sa"),$id));
        echo "3";

}
echo "4";
//header("Location: event.php");
?>
