<?php
session_start();
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 4/21/2017
 * Time: 8:39 PM
 */

echo session_destroy();
header("location: index.php");

?>

